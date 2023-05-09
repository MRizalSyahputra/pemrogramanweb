<?php
if (isset($_COOKIE['Username'])) {
    echo "<h2>Selamat, usernamenya ternyata ada</h2> </br>Usernamenya adalah : " . $_COOKIE['Username'];
} else {
    echo "<h1>Waduh, usernamenya ternyata tidak ada</h1>";
}
echo "</br>";
if (isset($_COOKIE['Fullname'])) {
    echo "<h2>Selamat, nama lengkapnya ternyata ada</h2> </br> Nama lengkapnya adalah : " . $_COOKIE['Fullname'];
} else {
    echo "<h1>Waduh, nama lengkapnya kok gaada</h1>";
}

echo "</br></br></br></br></br></br> <h3>Mau hapus cookies? klik <a href='kuki3.php'>tulisan ini</a></h3>";
