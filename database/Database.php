<?php
if ($_SERVER['SERVER_NAME'] == 'junomoney.test') {
    $server = "localhost";
    $id = "root";
    $password = "";
    $db = "junomoney";
    //die("Burdan sonrasına geçit yok...");

    $conn = new mysqli($server, $id, $password, $db, 3306);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error)
        die("Bağlantı sağlanamadı : " . $conn->connect_error);
} else {
    $server = "localhost";
    $id = "junomoney";
    $password = "EN^Fx^=FJf]B3@]m";
    $db = "junomoney";
    //die("Burdan sonrasına geçit yok...");

    $conn = new mysqli($server, $id, $password, $db, 3306);
    mysqli_set_charset($conn, "utf8");
    if ($conn->connect_error)
        die("Bağlantı sağlanamadı : " . $conn->connect_error);
}
