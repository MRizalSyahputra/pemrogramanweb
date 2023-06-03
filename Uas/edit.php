<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data Buku</title>
</head>

<body>
    <h2>Menu Edit Data Buku</h2>

    <p>Bingung mengenai aturan pengisian nomor seri? <a href="tatacara.html" target="_blank">Klik di sini</a></p> <!--Akan terbuka tab baru untuk menampilkan aturan pengisian-->
    <!--Form untuk mengedit data buku-->
    <form action="" method="post">
        <input type="text" id="edit-noseri" name="edit-noseri" placeholder="Nomor Seri" required=""> <br />
        <input type="text" id="edit-judul" name="edit-judul" placeholder="Judul Buku" required=""><br />
        <input type="text" id="edit-pengarang" name="edit-pengarang" placeholder="Nama Pengarang" required=""><br />
        <input type="text" id="edit-tahunterbit" name="edit-tahunterbit" placeholder="Tahun Terbit" required=""><br />
        <input type="text" id="edit-penerbit" name="edit-penerbit" placeholder="Penerbit" required=""><br />
        <input type="text" id="edit-genre" name="edit-genre" placeholder="Genre Buku" required=""><br />
        <button type="submit" name="submit">Perbarui data</button>
    </form>

    <p><a href="Site.php">Kembali ke dashboard</a></p>
</body>

</html>