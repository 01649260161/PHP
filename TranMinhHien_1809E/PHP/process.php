<?php
    $user = $_POST["user"];
    $password = $_POST["password"];

    echo ($user == "admin" and $password == "1234")?"Bạn đã đăng nhập thành công":"Đăng nhập thất bại";
?>