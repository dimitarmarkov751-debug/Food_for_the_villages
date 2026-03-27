<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $location = htmlspecialchars($_POST['location']);
    $type = htmlspecialchars($_POST['type']);
    $message = htmlspecialchars($_POST['message']);

    $file = fopen("requests.txt", "a");
    fwrite($file, "Име: $name\nМясто: $location\nТип помощ: $type\nДопълнително: $message\n---\n");
    fclose($file);

    header("Location: thank-you.html");
    exit();
}
?>