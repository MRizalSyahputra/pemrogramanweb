<?php
include('koneksi.php');
$id = $_GET["id"]; //mengambil id dari url yang akan digunakan untuk mengambil data mahasiswa

$mhs = query("SELECT * FROM datamahasiswa WHERE id = $id")[0]; //mengambil baris data dalam database dari id yang telah diambil

//mengecek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //untuk mengecek apakah input data berhasil atau tidak
    if (ubah($_POST) > 0) {
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'situs.php';
                </script>
            ";
    } else { //saat data gagal dimasukkan, function tambahdata akan mereturn nilai -1
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Gagal mengubah data! Atau mungkin anda tidak mengubah data apapun?');
                    document.location.href = 'situs.php';
                </script>
            ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD - Edit Data dari Database</title>
</head>

<body>
    <h1>Edit data</h1>
    <p><a href="situs.php">lihat semua data</a></p>
    <!--form untuk mengubah data-->
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="text" id="NIM" name="NIM" placeholder="NIM" required="" value="<?= $mhs["NIM"]; ?>" autocomplete="off"> <br />
        <input type="text" id="Nama" name="Nama" placeholder="Nama Mahasiswa" required="" value="<?= $mhs["Nama"]; ?>" autocomplete="off"><br />
        <input type="text" id="Alamat" name="Alamat" placeholder="Alamat" required="" value="<?= $mhs["Alamat"]; ?>" autocomplete="off"><br />
        <button type="submit" name="submit">Perbarui data</button> <!--mengirimkan data-->
    </form>
</body>

</html>