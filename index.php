<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div>
        <input type="text" id="url" placeholder="Enter URL to shorten">
        <button id="shorten-btn">Shorten URL</button>
        <div id="result"></div>
    </div>
    <div>
        <button id="history-btn">Show History</button>
        <div id="result-history"></div>
    </div>
    <div>
        <button id="stats-btn">Show Stats</button>
        <div id="stats-result"></div>
    </div>

    <script src="public/shorten.js"></script>
    <script src="public/history.js"></script>
    <script src="public/stats.js"></script>
</body>
</html>
