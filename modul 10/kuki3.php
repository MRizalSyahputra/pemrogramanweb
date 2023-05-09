<?php
    setcookie("Username", "", time()-7200);
    setcookie("Fullname", "", time()-7200);
    echo "<h2>Cookie berhasil dihapus!</h2>";
    echo "Tidak percaya? coba cek <a href=kuki2.php>ini</a>";
