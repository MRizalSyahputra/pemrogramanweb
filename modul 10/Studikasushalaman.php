<?php
session_start();
if (!isset($_SESSION["username"])) { //jika pengguna belum login
    header("Location: login.php"); // redirect ke halaman login
    exit();
} else {
    echo "<h3>maaf, tapi kami masih mempersiapkan halaman ini. Terus pantau kami ya!</h3>";
    echo "</br>";
    echo "silahkan logout <a href=Studikasuslogoutmessage.php> di sini</a>";
}
