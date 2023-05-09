<?php
session_start();
if (isset($_SESSION['login'])) {
    unset($_SESSION);
    session_destroy();
    echo "<h1>Anda sudah berhasil logout!</h1>";
    echo "Jikalau memang anda mau login lagi, silahkan klik <a href=sesi1.php>di sini</a>";
}
