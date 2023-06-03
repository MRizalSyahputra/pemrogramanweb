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
    <h5>Silahkan input datanya</h5>
    <br />
    <br />

    <form method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="NIM"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <br />
    <h6>Data Mahasiswa yang telah diinput : </h6>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Menu</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM datamahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['Alamat']; ?></td>
                <td>
                    <a href="lihat.php?NIM=<?php echo $d['NIM']; ?>">lihat</a>
                    <a href="edit.php?NIM=<?php echo $d['NIM']; ?>">edit</a>
                    <a href="hapus.php?NIM=<?php echo $d['NIM']; ?>">hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>