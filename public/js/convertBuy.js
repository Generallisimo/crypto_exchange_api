document.addEventListener('DOMContentLoaded', function() {
    let fromCurrencyBuy = 'BTC';
    let toCurrencyBuy = 'USDT';

    const optionItems1 = document.querySelectorAll('.select__wrapper3');
    const staticCurrency1 = document.querySelector('.select__value3');

    function logCurrency1() {
        console.log("Selected Currency 3:", staticCurrency1.value);
        fromCurrencyBuy = staticCurrency1.value;
    }

    logCurrency1();

    optionItems1.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button3 .select__value");
            fromCurrencyBuy = selectedValueElement.value;
            console.log("Updated Currency 3:", fromCurrencyBuy);
            updateConversion();
        });
    });

    const optionItems2 = document.querySelectorAll('.select__wrapper4');
    const staticCurrency2 = document.querySelector('.select__value4');

    function logCurrency2() {
        console.log("Selected Currency 4:", staticCurrency2.value);
        toCurrencyBuy = staticCurrency2.value;
    }

    logCurrency2();

    optionItems2.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button4 .select__value");
            toCurrencyBuy = selectedValueElement.value;
            console.log("Updated Currency 4:", toCurrencyBuy);
            updateConversion();
        });
    });

    const sendAmount = document.getElementById('send-money-value');
    sendAmount.addEventListener('input', function() {
        updateConversion();
    });

    const getCoinsValueInput = document.getElementById('get-buy-value');

    async function getConversionRate(fromCurrencyBuy, toCurrencyBuy) {
        const intermediateCurrency = 'USDT'; // Промежуточная валюта
        let rate = null;
        try {
            let response = await fetch(`/api/conversion-rate?from=${fromCurrencyBuy}&to=${toCurrencyBuy}`);
            let data = await response.json();
            if (data.price) {
                rate = parseFloat(data.price);
            } else {
                console.log('Direct pair not found, checking reverse pair...');
                const reverseResponse = await fetch(`/api/conversion-rate?from=${toCurrencyBuy}&to=${fromCurrencyBuy}`);
                const reverseData = await reverseResponse.json();
                if (reverseData.price) {
                    rate = 1 / parseFloat(reverseData.price);
                } else if (fromCurrencyBuy === 'XMR' && (toCurrencyBuy === 'RUB' || toCurrencyBuy === 'UAH')) {
                    console.log('Pair not found, using intermediate currency');
                    const intermediateResponse1 = await fetch(`/api/conversion-rate?from=${fromCurrencyBuy}&to=${intermediateCurrency}`);
                    const intermediateData1 = await intermediateResponse1.json();
                    const intermediateResponse2 = await fetch(`/api/conversion-rate?from=${intermediateCurrency}&to=${toCurrencyBuy}`);
                    const intermediateData2 = await intermediateResponse2.json();
                    if (intermediateData1.price && intermediateData2.price) {
                        const intermediateRate1 = parseFloat(intermediateData1.price);
                        const intermediateRate2 = parseFloat(intermediateData2.price);
                        rate = intermediateRate1 * intermediateRate2;
                    } else {
                        throw new Error('Intermediate pairs not found or error retrieving rate');
                    }
                } else if ((fromCurrencyBuy === 'RUB' || fromCurrencyBuy === 'UAH') && toCurrencyBuy === 'XMR') {
                    console.log('Pair not found, using intermediate currency');
                    const intermediateResponse3 = await fetch(`api/conversion-rate?from=${toCurrencyBuy}&to=${intermediateCurrency}`);
                    const intermediateData3 = await intermediateResponse3.json();
                    const intermediateResponse4 = await fetch(`api/conversion-rate?from=${intermediateCurrency}&to=${fromCurrencyBuy}`);
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
        const rate = await getConversionRate(fromCurrencyBuy, toCurrencyBuy);
        if (rate) {
            const convertedAmount = amount * rate;
            getCoinsValueInput.value = convertedAmount.toFixed(8);
        } else {
            getCoinsValueInput.value = 'Error retrieving rate';
        }
    }
    
});
