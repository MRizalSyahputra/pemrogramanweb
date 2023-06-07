<!DOCTYPE html>
<html>

<head>
    <title>CRUD - Tampil Data dari Database</title>
</head>

<body>
    <h1>Detail data</h1>
    <br />
    <br />

    <?php
    include('koneksi.php'); //menyambungkan file dengan koneksi.php

    if (isset($_GET['id'])) { //jika id terkirim lewat URL
        $id = $_GET['id']; //definisikan variabel id dengan id yang dikirimkan

        $data = mysqli_query($koneksi, "SELECT * FROM datamahasiswa WHERE id = '$id'") or die('Koneksi gagal'); //mengambil data dari tabel datamahasiswa di database atau cetak koneksi gagal jika tidak ada
        $d = mysqli_fetch_assoc($data); //ambil data dari database sesuai id

        if ($d) { //jika ada, tampilkan data ?>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>: <?php echo $d['NIM']; ?></td> <!--menampilkan data NIM-->
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>: <?php echo $d['Nama']; ?></td> <!--menampilkan data Nama-->
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $d['Alamat']; ?></td> <!--menampilkan data Alamat-->
                </tr>
            </table>
    <?php
        } else { //jika tidak ditemukan
            echo "Data tidak ditemukan.";
        }
    }
    ?>
    <a href="situs.php">Kembali ke halaman depan</a> <!--kembali ke halaman utama-->
</body>

</html>