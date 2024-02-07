<?php
$host = "qymz932";
$username = "Meshal.adman";
$password = "MEshal932";
$database = "Database.alrizqi";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>