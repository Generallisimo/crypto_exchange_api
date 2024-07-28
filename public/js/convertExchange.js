document.addEventListener('DOMContentLoaded', function() {
    let fromCurrency = 'BTC';
    let toCurrency = 'USDT';

    const optionItems1 = document.querySelectorAll('.select__wrapper1');
    const staticCurrency1 = document.querySelector('.select__value1');

    function logCurrency1() {
        console.log("Selected Currency 1:", staticCurrency1.value);
        fromCurrency = staticCurrency1.value;
    }

    logCurrency1();

    optionItems1.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button1 .select__value");
            fromCurrency = selectedValueElement.value;
            console.log("Updated Currency 1:", fromCurrency);
            updateConversion();
        });
    });

    const optionItems2 = document.querySelectorAll('.select__wrapper2');
    const staticCurrency2 = document.querySelector('.select__value2');

    function logCurrency2() {
        console.log("Selected Currency 2:", staticCurrency2.value);
        toCurrency = staticCurrency2.value;
    }

    logCurrency2();

    optionItems2.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button2 .select__value");
            toCurrency = selectedValueElement.value;
            console.log("Updated Currency 2:", toCurrency);
            updateConversion();
        });
    });

    const sendAmount = document.getElementById('send-coins-value');
    sendAmount.addEventListener('input', function() {
        updateConversion();
    });

    const getCoinsValueInput = document.getElementById('get-coins-value');

    async function getConversionRate(fromCurrency, toCurrency) {
        const intermediateCurrency = 'USDT'; // Промежуточная валюта
        let rate = null;
        try {
            let response = await fetch(`/api/conversion-rate?from=${fromCurrency}&to=${toCurrency}`);
            let data = await response.json();
            if (data.price) {
                rate = parseFloat(data.price);
            } else {
                console.log('Direct pair not found, checking reverse pair...');
                const reverseResponse = await fetch(`/api/conversion-rate?from=${toCurrency}&to=${fromCurrency}`);
                const reverseData = await reverseResponse.json();
                if (reverseData.price) {
                    rate = 1 / parseFloat(reverseData.price);
                } else if (fromCurrency === 'XMR' && (toCurrency === 'RUB' || toCurrency === 'UAH')) {
                    console.log('Pair not found, using intermediate currency');
                    const intermediateResponse1 = await fetch(`/api/conversion-rate?from=${fromCurrency}&to=${intermediateCurrency}`);
                    const intermediateData1 = await intermediateResponse1.json();
                    const intermediateResponse2 = await fetch(`/api/conversion-rate?from=${intermediateCurrency}&to=${toCurrency}`);
                    const intermediateData2 = await intermediateResponse2.json();
                    if (intermediateData1.price && intermediateData2.price) {
                        const intermediateRate1 = parseFloat(intermediateData1.price);
                        const intermediateRate2 = parseFloat(intermediateData2.price);
                        rate = intermediateRate1 * intermediateRate2;
                    } else {
                        throw new Error('Intermediate pairs not found or error retrieving rate');
                    }
                } else if ((fromCurrency === 'RUB' || fromCurrency === 'UAH') && toCurrency === 'XMR') {
                    console.log('Pair not found, using intermediate currency');
                    const intermediateResponse3 = await fetch(`api/conversion-rate?from=${toCurrency}&to=${intermediateCurrency}`);
                    const intermediateData3 = await intermediateResponse3.json();
                    const intermediateResponse4 = await fetch(`api/conversion-rate?from=${intermediateCurrency}&to=${fromCurrency}`);
                    const intermediateData4 = await intermediateResponse4.json();
                    if (intermediateData3.price && intermediateData4.price) {
                        rate = 1 / (parseFloat(intermediateData3.price) * parseFloat(intermediateData4.price));
                    } else {
                        throw new Error('Intermediate pairs not found or error retrieving rate');
                    }
                } else {
                    throw new Error('Direct and reverse pairs not found or error retrieving rate');
                }
            }
            return rate;
        } catch (error) {
            console.error('Error fetching conversion rate:', error);
            return null;
        }
    }
    
    async function updateConversion() {
        const amount = parseFloat(sendAmount.value);
        if (isNaN(amount)) {
            getCoinsValueInput.value = 'Invalid amount';
            return;
        }
        const rate = await getConversionRate(fromCurrency, toCurrency);
        if (rate) {
            const convertedAmount = amount * rate;
            getCoinsValueInput.value = convertedAmount.toFixed(8);
        } else {
            getCoinsValueInput.value = 'Error retrieving rate';
        }
    }
    
});
