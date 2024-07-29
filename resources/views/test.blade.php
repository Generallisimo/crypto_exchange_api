<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }
        .loading {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="loading">
        <h1>Ожидание подтверждения...</h1>
        <p>Ваш запрос ожидает подтверждения через Телеграм бот.</p>
    </div>
    
</body>
</html>
























<!-- <!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const resultDiv = document.getElementById('result');

    async function getTradingPairs() {
        try {
            const response = await fetch('https://api.binance.com/api/v3/exchangeInfo');
            const data = await response.json();

            // Обработка и отображение данных
            if (data.symbols && data.symbols.length > 0) {
                // Создаем строку для отображения
                const pairsList = data.symbols
                    .map(symbol => symbol.symbol) // Извлекаем только символы
                    .join('<br>'); // Разделяем символы с помощью <br> для отображения в новой строке

                resultDiv.innerHTML = `<strong>Available Trading Pairs:</strong><br>${pairsList}`;
            } else {
                resultDiv.textContent = 'No trading pairs available.';
            }

            return data.symbols;
        } catch (error) {
            console.error('Error fetching trading pairs:', error);
            resultDiv.textContent = 'Error fetching trading pairs.';
            return null;
        }
    }

    // Пример вызова функции
    getTradingPairs();
});

    </script>
</head>
<body>
    <form action="#" method="POST">
        @csrf
        <label for="from_currency">From Currency (e.g., BTC):</label>
        <input type="text" id="from_currency" name="from_currency" required>
        <label for="to_currency">To Currency (e.g., USDT):</label>
        <input type="text" id="to_currency" name="to_currency" required>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="any" required>
    </form>
    <div id="result"></div>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<head>
    <title>Currency Converter</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const resultDiv = document.getElementById('result');

            async function getCurrency() {
                try {
                    const response = await fetch('https://openexchangerates.org/api/currencies.json?app_id=be94e1cd345844fbb68ed19189390a74');
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    const data = await response.json();

                    // Преобразование данных в формат строки для отображения
                    const formattedData = Object.entries(data).map(([code, name]) => `<p>${code}: ${name}</p>`).join('');

                    resultDiv.innerHTML = formattedData;
                } catch (error) {
                    console.error('Ошибка:', error);
                    resultDiv.innerHTML = 'Не удалось загрузить данные';
                }
            }

            async function convertCurrency(from, to, amount) {
                try {
                    const response = await fetch(`https://api.exchangerate-api.com/v4/latest/${from}`);
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    const data = await response.json();

                    if (!data.rates[to]) {
                        throw new Error(`No exchange rate found for ${to}`);
                    }

                    const rate = data.rates[to];
                    const convertedAmount = (amount * rate).toFixed(2);

                    resultDiv.innerHTML = `<p>${amount} ${from} = ${convertedAmount} ${to}</p>`;
                } catch (error) {
                    console.error('Ошибка:', error);
                    resultDiv.innerHTML = 'Не удалось выполнить конвертацию';
                }
            }

            // Обработка формы
            document.querySelector('form').addEventListener('submit', function(event) {
                event.preventDefault();

                const fromCurrency = document.getElementById('from_currency').value.toUpperCase();
                const toCurrency = document.getElementById('to_currency').value.toUpperCase();
                const amount = parseFloat(document.getElementById('amount').value);

                if (fromCurrency && toCurrency && !isNaN(amount)) {
                    convertCurrency(fromCurrency, toCurrency, amount);
                } else {
                    resultDiv.innerHTML = 'Пожалуйста, введите корректные данные';
                }
            });

            getCurrency();
        });
    </script>
</head>
<body>
    <form action="#" method="POST">
        <label for="from_currency">From Currency (e.g., USD):</label>
        <input type="text" id="from_currency" name="from_currency" required>
        <label for="to_currency">To Currency (e.g., EUR):</label>
        <input type="text" id="to_currency" name="to_currency" required>
        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="any" required>
        <button type="submit">Convert</button>
    </form>
    <div id="result"></div>
</body>
</html> --> 
