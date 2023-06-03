<?php
session_start();
if (isset($_SESSION["username"])) {
    unset($_SESSION);
    session_destroy();
    echo "<h1>Anda sudah berhasil logout!</h1>";
    echo "Silahkan klik <a href=loginpage.php>di sini</a> untuk login kembali";
}
