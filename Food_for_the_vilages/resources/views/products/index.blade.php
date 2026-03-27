<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Помощ за села</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<h1>Система за помощ и доставки</h1>

<form id="deliveryForm">
    <label>Име:</label>
    <input type="text" id="name" required>

    <label>От град:</label>
    <input type="text" id="city" required>

    <label>До село:</label>
    <input type="text" id="village" required>

    <label>Какво искате да доставите:</label>
    <textarea id="items" required></textarea>

    <button type="submit">Изпрати заявка</button>
</form>

<p id="result"></p>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>