<!DOCTYPE html>
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