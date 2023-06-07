<?php
session_start();

if (!isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
    header("Location: login.php"); //kembalikan ke halaman login
    exit;
}

require 'function.php'; //menghubungkan halaman dengan file function.php

$id = $_GET["id"]; //mengambil id dari url yang akan digunakan untuk mengambil data mahasiswa

$buku = query("SELECT * FROM databuku WHERE id = $id")[0]; //mengambil baris data dalam database dari id yang telah diambil

//mengecek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //untuk mengecek apakah input data berhasil atau tidak
    if (ubahdata($_POST) > 0) {
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'Site.php';
                </script>
            ";
    } else { //saat data gagal dimasukkan, function tambahdata akan mereturn nilai -1
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Gagal mengubah data! Atau mungkin anda tidak mengubah data apapun?');
                    document.location.href = 'Site.php';
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        header {
            background: rgb(34, 193, 195);
            background: linear-gradient(41deg, rgba(109, 148, 201, 100) 0%, rgba(9, 9, 121, 100) 35%, rgba(2, 197, 224, 100) 65%, rgba(0, 255, 218, 100) 96%);
        }

        body {
            background-image: url(bec.png);
        }
    </style>
</head>

<body>
    <header>
        <br />
        <br />
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div style="background: whitesmoke;">
                    <h1>
                        <p style="text-align: center;">Menu Edit Data Buku</p>
                    </h1>
                </div>
            </div>
        </div>
        <!--form untuk mengedit data buku, form sudah otomatis terisi data yang sudah ada-->
        <div style="background-color: white; border-radius: 30px; padding: 20px; margin-top: 170px;">
            <p>Bingung mengenai aturan pengisian nomor seri? <a href="tatacara.html" target="_blank">Klik di sini</a></p> <!--Akan terbuka tab baru untuk menampilkan aturan pengisian-->
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
                <div class="form-group">
                    <input type="text" id="noseri" name="noseri" placeholder="Nomor Seri" required="" value="<?= $buku["noseri"]; ?>" class="form-control" autocomplete="off"> <br />
                </div>
                <div class="form-group">
                    <input type="text" id="judul" name="judul" placeholder="Judul Buku" required="" value="<?= $buku["judul"]; ?>" class="form-control" autocomplete="off"><br />
                </div>
                <div class="form-group">
                    <input type="text" id="pengarang" name="pengarang" placeholder="Nama Pengarang" required="" value="<?= $buku["pengarang"]; ?>" class="form-control" autocomplete="off"><br />
                </div>
                <div class="form-group">
                    <input type="text" id="tahunterbit" name="tahunterbit" placeholder="Tahun Terbit" required="" value="<?= $buku["tahunterbit"]; ?>" class="form-control" autocomplete="off"><br />
                </div>
                <div class="form-group">
                    <input type="text" id="penerbit" name="penerbit" placeholder="Penerbit" required="" value="<?= $buku["penerbit"]; ?>" class="form-control" autocomplete="off"><br />
                </div>
                <div class="form-group">
                    <input type="text" id="genre" name="genre" placeholder="Genre Buku" required="" value="<?= $buku["genre"]; ?>" class="form-control" autocomplete="off"><br />
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Perbarui data</button>
            </form>
            <br />
            <p><a href="Site.php">Kembali ke dashboard</a></p> <!--Kembali ke halaman dashboard-->
        </div>
    </div>

</body>

</html>