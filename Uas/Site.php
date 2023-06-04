<?php
session_start();

    if (!isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
      header("Location: login.php"); //kembalikan ke halaman login
      exit;
    }

require 'function.php'; //menyambungkan halaman dengan file function.php, kurang lebih kegunaannya sama dengan include
$buku = query("SELECT * FROM databuku ORDER BY judul ASC"); //mengambil data dari tabel databuku, serta otomatis mengurutkannya menurut judul buku secara alfabetis

//saat tombol cari ditekan
if(isset($_POST["cari"]) ) {
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
</head>

<body>
  <a href="logout.php">logout</a>
  <h1>Dashboard</h1>
  <?php

  ?>
  <br />
  <p><a href="tambah.php">Tambah Buku Baru</a><p> 
  <!--Membuka halaman baru untuk menambahkan data buku yang baru-->
  <h3>Cari buku</h3>

  <!--menu untuk mencari buku berdasarkan data yang diinginkan-->
  <form action="" method="post">
    <input type="text" name="keyword" placeholder="Masukkan kata kunci" size="30" autofocus autocomplete="off">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br />
  <br />
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Nomor buku</th>
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
  <br />
  
</body>

</html>