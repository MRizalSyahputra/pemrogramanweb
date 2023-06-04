<?php 
    require 'function.php';

    if(isset($_POST["tambah"])) {
        if ( registrasi($_POST) > 0) {
            echo "<script>
                    alert('Admin baru berhasil ditambahkan');
                </script>";
        } else {
            echo " <script>
                    alert('Gagal menambahkan admin baru');
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambahkan administrator</title>
</head>
<body>
    <h1>Tambah Administrator</h1>
    <br/>
    <Form action="" method="post">
        <input type="text" id="name" name="username" placeholder="Username untuk administrator baru" size="40" autocomplete="off"> <br/>
        <input type="password" id="password" name="password" placeholder="Password untuk user baru"><br/>
        <input type="password" id="password2" name="password2" placeholder="Konfirmasi password"><br/>
        <button type="submit" name="tambah">Tambahkan administrator</button>
    </Form>
</body>
</html>