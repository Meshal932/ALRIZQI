<?php
$servername = "qymz932";
$username = "Meshal.adman";
$password = "MEshal932";
$dbname = "Databse.alrizqi";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص اتصال قاعدة البيانات
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>