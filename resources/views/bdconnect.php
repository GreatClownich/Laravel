<?php

$servername = "ip сервера"; // ip
$username = "pup"; // Имя пользователя mysql (Не забудьте, что у него должны быть права на нужную таблицу)
$password = "Q1qqqqqq."; //Пароль для пользователя user
$db = "laravel_blog"; // Название базы данных, к которой подключаетесь.
$conn = mysqli_connect($servername, $username, $password, $db); // Выполняем подключение

if (!$conn) { // Проверяем подключение к БД.
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

$sql = "SELECT * FROM menu"; // Можно добавить WHERE id>'1', чтобы искать по id или диапазону. Где menu - это название таблицы, к которой подключаетесь.
$result = mysqli_query($conn, $sql);