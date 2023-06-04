<?php
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
</head>

<body>
    <h2>Menu Edit Data Buku</h2>

    <p>Bingung mengenai aturan pengisian nomor seri? <a href="tatacara.html" target="_blank">Klik di sini</a></p> <!--Akan terbuka tab baru untuk menampilkan aturan pengisian-->
    <!--form untuk mengedit data buku, form sudah otomatis terisi data yang sudah ada-->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $buku["id"]; ?>">
        <input type="text" id="noseri" name="noseri" placeholder="Nomor Seri" required="" value="<?= $buku["noseri"]; ?>" autocomplete="off"> <br />
        <input type="text" id="judul" name="judul" placeholder="Judul Buku" required="" value="<?= $buku["judul"]; ?>" autocomplete="off"><br />
        <input type="text" id="pengarang" name="pengarang" placeholder="Nama Pengarang" required="" value="<?= $buku["pengarang"]; ?>" autocomplete="off"><br />
        <input type="text" id="tahunterbit" name="tahunterbit" placeholder="Tahun Terbit" required="" value="<?= $buku["tahunterbit"]; ?>" autocomplete="off"><br />
        <input type="text" id="penerbit" name="penerbit" placeholder="Penerbit" required="" value="<?= $buku["penerbit"]; ?>" autocomplete="off"><br />
        <input type="text" id="genre" name="genre" placeholder="Genre Buku" required="" value="<?= $buku["genre"]; ?>" autocomplete="off"><br />
        <button type="submit" name="submit">Perbarui data</button>
    </form>

    <p><a href="Site.php">Kembali ke dashboard</a></p> <!--Kembali ke halaman dashboard-->
</body>

</html>