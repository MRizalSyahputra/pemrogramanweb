<!DOCTYPE html>
<html>

<head>
    <title>CRUD - tampil data dari database</title>
</head>

<body>
    <h1>Detail data</h1>
    <br />
    <br />

    <?php
    include "koneksi.php";
    $NIM = $_GET['NIM'];
    $data = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE NIM = '$NIM'") or die('koneksi gagal');
    $no = 1;
    while ($d = mysqli_fetch_array($data)); {
    ?>
        <table>
            <tr>
                <td>NIM</td>
                <td>: <?php echo $d['NIM'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $d['Nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?php echo $d['Alamat'] ?></td>
            </tr>
        </table>
    <?php } ?>
    <a href="situs.php">Kembali ke halaman depan</a>
</body>

</html>