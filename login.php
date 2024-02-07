<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استيراد ملف الاتصال بقاعدة البيانات
    require_once 'db_connect.php';

    // استرداد القيم من النموذج
    $username = $_POST['username'];
    $password = $_POST['password'];

    // استخدام استعلام SQL لاستعادة السجل المطابق من جدول المستخدمين
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "تم تسجيل الدخول بنجاح";
    } else {
        echo "بيانات تسجيل الدخول غير صحيحة";
    }

    // إغلاق اتصال قاعدة البيانات
    mysqli_close($conn);
}
?>