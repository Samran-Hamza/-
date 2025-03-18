<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "istudents.support@hse.ru"; // Твой email
    $subject = "Новый вопрос от $name";
    $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";
    $headers = "From: $email";

    // Отправляем письмо
    if (mail($to, $subject, $body, $headers)) {
        echo "Ваше сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>
