<?php
$servername = "localhost";
$database = "testcur";
$username = "root";
$password = "root";
// Создаем соединение
//$conn = mysqli_connect($servername, $username, $password, $database);
$conn = new mysqli($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    die('Ошибка подключения: ' . mysqli_connect_error());
}

?>
