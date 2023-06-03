<?php
    require 'function.php'; //menghubungkan halaman dengan file function.php
    
    if(isset ($_POST["submit"])) {
        //untuk mengecek apakah input data berhasil atau tidak
        if(tambahdata($_POST) > 0) { //saat data berhasil dimasukkan, function tambahdata akan mereturn nilai 1
            //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
            echo "
                <script>
                    alert('Data berhasil dimasukkan!');
                    document.location.href = 'Site.php';
                </script>
            ";
        } else { //saat data gagal dimasukkan, function tambahdata akan mereturn nilai -1
            //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
            echo "
                <script>
                    alert('Gagal memasukkan data');
                    document.location.href = 'Site.php';
                </script>
            ";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambahkan Data Buku</title>
</head>

<body>
    <h2>Menu Tambah Data Buku</h2>

    <p>Bingung mengenai aturan pengisian nomor seri? <a href="tatacara.html" target="_blank">Klik di sini</a></p> <!--Akan terbuka tab baru untuk menampilkan aturan pengisian-->
    <!--form untuk mengisi data buku-->
    <form action="" method="post">
        <input type="text" id="noseri" name="noseri" placeholder="Nomor Seri" required=""> <br />
        <input type="text" id="judul" name="judul" placeholder="Judul Buku" required=""><br />
        <input type="text" id="pengarang" name="pengarang" placeholder="Nama Pengarang" required=""><br />
        <input type="text" id="tahunterbit" name="tahunterbit" placeholder="Tahun Terbit" required=""><br />
        <input type="text" id="penerbit" name="penerbit" placeholder="Penerbit" required=""><br />
        <input type="text" id="genre" name="genre" placeholder="Genre Buku" required=""><br />
        <button type="submit" name="submit">Tambahkan data</button>
    </form>

    <p><a href="Site.php">Kembali ke dashboard</a></p> <!--Kembali ke halaman dashboard-->
</body>

</html>