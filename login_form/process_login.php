<?php

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Просто выводим введенный email для демонстрации
    echo "Email: " . $email;

}

?>