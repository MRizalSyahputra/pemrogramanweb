<?php
    $a1 = 'Mahmud Ibnu';
    $a2 = 'Habib';
    setcookie("Username", $a2);
    setcookie("Fullname", $a1, time()+7200);

    echo "<h2>halaman cek cookie</h2>";
    echo "<h3>klik <a href='kuki2.php'>ini</a> untuk mengecek cookie</h3>";
