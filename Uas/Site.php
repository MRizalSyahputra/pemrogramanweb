<?php
session_start();

if (!isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
  header("Location: login.php"); //kembalikan ke halaman login
  exit;
}

require 'function.php'; //menyambungkan halaman dengan file function.php, kurang lebih kegunaannya sama dengan include
$buku = query("SELECT * FROM databuku ORDER BY judul ASC"); //mengambil data dari tabel databuku, serta otomatis mengurutkannya menurut judul buku secara alfabetis

//saat tombol cari ditekan
if (isset($_POST["cari"])) {
  $keyword = $_POST["keyword"];
  if (!empty($keyword)) {
    //Jika ada isinya, maka tampilkan semua data yang memiliki isian seperti itu
    $buku = cari($keyword);
  } else {
    // Jika kata kunci kosong, tampilkan semua data
    $buku = query("SELECT * FROM databuku ORDER BY judul ASC");
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
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

    .tabel {
      font-family: sans-serif;
      color: #444;
      border-collapse: collapse;
      border: 1px solid #f2f5f7;
    }

    .tabel tr th {
      background: #35A9DB;
      color: #fff;
      font-weight: normal;
    }

    .tabel,
    th,
    td {
      padding: 8px 20px;
      text-align: center;
    }

    .tabel tr:hover {
      background-color: #f5f5f5;
    }

    .tabel tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>

<body>
  <header>
    <div class="container">
      <a href="logout.php"><button type="submit" class="btn btn-danger" name="logout" style="border-radius: 30px; ">logout</button></a>
    </div>
    <br />
    <br />
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-5">
      </div>
      <div class="col-md-2">
        <div style="background: whitesmoke;">
          <h1>
            <p style="text-align: center;">Data Buku</p>
          </h1>
        </div>
      </div>
      <br />
      <a href="tambah.php"><button type="submit" class="btn btn-primary" name="tambah">Tambah Buku Baru</button></a>
      <!--Membuka halaman baru untuk menambahkan data buku yang baru-->
      <br />
      <br />
      <br />
      <div class="col-sm-3">
        <div style="background: whitesmoke; border-radius: 10px; padding: 20px;">
          <h4>Cari buku</h4>
          <!--menu untuk mencari buku berdasarkan data yang diinginkan-->
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="keyword" placeholder="Masukkan kata kunci" size="30" autofocus autocomplete="off">
            </div>
            <button type="submit" class="btn btn-info" name="cari">Cari</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br />
  <br />
  <div class="container">
    <div class="col-md-3">
      <div style="background: whitesmoke; border-radius: 30px; padding: 5px;">
        <h3>Daftar koleksi buku     : </h3>
      </div>
    </div>
    <div style="background-color: whitesmoke;">
      <table class="tabel" border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No.</th>
          <th>Nomor Seri</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Tahun Terbit</th>
          <th>Penerbit</th>
          <th>Genre Buku</th>
          <th>Menu</th>
        </tr>
        <?php $i = 1; ?> <!--menginisialisasi nilai variabel i-->
        <?php foreach ($buku as $data) : ?> <!--looping untuk terus memasukkan data dalam tabel selagi masih ada-->
          <tr>
            <td><?= $i; ?> </td> <!--Menjadikan nilai i sebagai pengisi kolom nomor-->
            <td><?= $data["noseri"]; ?></td>
            <td><?= $data["judul"]; ?></td>
            <td><?= $data["pengarang"]; ?></td>
            <td><?= $data["tahunterbit"]; ?></td>
            <td><?= $data["penerbit"]; ?></td>
            <td><?= $data["genre"]; ?></td>
            <td><a href="edit.php?id=<?= $data["id"]; ?>">edit</a> | <a href="hapus.php?id=<?= $data["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">hapus</a></td> <!--Membuka halaman untuk mengedit data buku yang dipilih atau langsung menghapus data buku yang dipilih-->
          </tr>
          <?php $i++; ?> <!--increment untuk variabel i-->
        <?php endforeach; ?> <!--akhir looping-->
      </table>
    </div>
  </div>

  <br />

</body>

</html>