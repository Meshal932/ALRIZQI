<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استيراد ملف الاتصال بقاعدة البيانات
    require_once 'db_connect.php';

    // استرداد القيم من النموذج
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // استخدام استعلام SQL لإدراج سجل جديد في جدول المستخدمين
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "تم إنشاء الحساب بنجاح";
    } else {
        echo "حدث خطأ أثناء إنشاء الحساب: " . mysqli_error($conn);
    }

    // إغلاق اتصال قاعدة البيانات
    mysqli_close($conn);
}
?>