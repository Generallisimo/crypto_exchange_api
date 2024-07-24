document.addEventListener('DOMContentLoaded', function() {
    // Переменные для хранения выбранных валют
    let fromCurrency = 'BTC';
    let toCurrency = 'USDT';

    // Получение валюты 1
    const optionItems1 = document.querySelectorAll('.select__wrapper1');
    const staticCurrency1 = document.querySelector('.select__value1');
    
    function logCurrency1() {
        console.log("Selected Currency 1:", staticCurrency1.value);
        fromCurrency = staticCurrency1.value; // Обновляем выбранную валюту 1
    }
    
    logCurrency1();
    
    optionItems1.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button1 .select__value");
            fromCurrency = selectedValueElement.value;
            console.log("Updated Currency 1:", fromCurrency);
            updateConversion(); // Обновляем конвертацию при изменении валюты
        });
    });

    // Получение валюты 2
    const optionItems2 = document.querySelectorAll('.select__wrapper2');
    const staticCurrency2 = document.querySelector('.select__value2');
    
    function logCurrency2() {
        console.log("Selected Currency 2:", staticCurrency2.value);
        toCurrency = staticCurrency2.value; // Обновляем выбранную валюту 2
    }
    
    logCurrency2();
    
    optionItems2.forEach(item => {
        item.addEventListener('click', function() {
            const selectedValueElement = document.querySelector(".select__button2 .select__value");
            toCurrency = selectedValueElement.value;
            console.log("Updated Currency 2:", toCurrency);
            updateConversion(); // Обновляем конвертацию при изменении валюты
        });
    });

    // Сумма пользователя
    const sendAmount = document.getElementById('send-coins-value');
    sendAmount.addEventListener('input', function() {
        updateConversion();
    });

    // Получение суммы
    const getCoinsValueInput = document.getElementById('get-coins-value');
    
    // Функция для получения курса валют
    async function getConversionRate(fromCurrency, toCurrency) {
        try {
            const response = await fetch(`/api/conversion-rate?from=${fromCurrency}&to=${toCurrency}`);
            const data = await response.json();
            console.log('API Response:', data);
            return parseFloat(data.price);
        } catch (error) {
            console.error('Error fetching conversion rate:', error);
            return null;
        }
    }

    // Функция для обновления результата конвертации
    async function updateConversion() {
        const amount = parseFloat(sendAmount.value);
        
        if (isNaN(amount)) {
            getCoinsValueInput.value = 'Invalid amount';
            return;
        }

        const rate = await getConversionRate(fromCurrency, toCurrency);
        
        if (rate) {
            const convertedAmount = amount * rate;
            getCoinsValueInput.value = convertedAmount.toFixed(8); // Округляем до 8 знаков после запятой
        } else {
            getCoinsValueInput.value = 'Error retrieving rate';
        }
    }
});