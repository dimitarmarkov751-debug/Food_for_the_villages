<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $location = htmlspecialchars($_POST['location']);
    $type = htmlspecialchars($_POST['type']);
    $message = htmlspecialchars($_POST['message']);

    // Записване на заявката в текстов файл (може да се замени с база данни)
    $file = fopen("requests.txt", "a");
    fwrite($file, "Име: $name\nМясто: $location\nТип помощ: $type\nДопълнително: $message\n---\n");
    fclose($file);

    // Пренасочване обратно към формата
    header("Location: index.html");
    exit();
}
?>