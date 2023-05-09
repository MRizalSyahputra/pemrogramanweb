<?php
session_start();
if (isset($_SESSION['login'])) {
    echo "<h1>Selamat datang," . $_SESSION['login'] . "</h1>";
    echo "<h2>Selamat karena berhasil login, ingatan anda hebat</h2>";
    echo "<h3>Anda mau logout? klik <a href = sesi3.php>disini</a> untuk logout</h3>";
} else {
    die("Anda belum login. Silahkan login dulu <a href=sesi1.php>di sini</a>");
}
