<?php
include('koneksi.php');
$mhs = query("SELECT * FROM datamahasiswa ORDER BY Nama ASC");
if (isset($_POST["tambah"])) {
    //untuk mengecek apakah input data berhasil atau tidak
    if (tambah($_POST) > 0) { //saat data berhasil dimasukkan
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Data berhasil dimasukkan!');
                    document.location.href = 'situs.php';
                </script>
            ";
    } else { //saat data gagal dimasukkan
        //akan mencetak notifikasi seperti di bawah, dan diarahkan kembali ke halaman sebelumnya
        echo "
                <script>
                    alert('Gagal memasukkan data');
                    document.location.href = 'situs.php';
                </script>
            ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>

<body>
    <h3 align="center">Data Mahasiswa</h3>
    <h3>Silahkan input datanya</h3>
    <!--form untuk menambahkan data baru-->
    <form action="" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" id="NIM" name="NIM" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" id="Nama" name="Nama" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" id="Alamat" name="Alamat" required="" autocomplete="off"></td>
            </tr>
            <tr>
                <button type="submit" name="tambah">Tambahkan data mahasiswa</button>
            </tr>
        </table>
    </form>
    <br />
    <h3>Data Mahasiswa yang telah diinput : </h3> <!--menampilkan seluruh data mahasiswa yang sudah diinputkan-->
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        <?php $i = 1; ?> <!--menginisialisasi nilai variabel i-->
        <?php foreach ($mhs as $data) : ?>
            <tr>
                <td><?= $i; ?> </td> <!--Menjadikan nilai i sebagai pengisi kolom nomor-->
                <td><?= $data["NIM"]; ?></td>
                <td><?= $data["Nama"]; ?></td>
                <td><?= $data["Alamat"]; ?></td>
                <td><a href="lihat.php?id=<?= $data['id']; ?>">lihat</a>
                    <a href="edit.php?id=<?= $data['id']; ?>">edit</a>
                    <a href="hapus.php?id=<?= $data['id']; ?>">hapus</a>
                </td>
            </tr>
            <?php $i++; ?> <!--increment untuk variabel i-->
        <?php endforeach; ?> <!--akhir looping-->
    </table>
</body>

</html>