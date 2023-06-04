<?php
session_start();
session_destroy();
echo "<h1>Anda sudah berhasil logout!</h1>";
echo "Silahkan klik <a href=login.php>di sini</a> untuk login kembali";
