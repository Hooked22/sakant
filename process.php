<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    echo "تم استلام البيانات بنجاح!";
    echo "الاسم: " . $name;
    echo "البريد الإلكتروني: " . $email;
}
?>
