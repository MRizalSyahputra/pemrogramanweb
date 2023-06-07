<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pemroweb')
    or die('koneksi gagal');

    function query ($query) {
        global $koneksi; ///mengambil variabel koneksi dari luar function

        //ambil data dari tabel
        $result = mysqli_query($koneksi, $query);
        $rows = []; //membuat array baru untuk menampung data sementara

        while ($row = mysqli_fetch_assoc($result)) {  //akan diambil data selama masih ada baris yang berisi data
            $rows[] = $row; //memasukkan baris data dalam array
        }
        return $rows; //mereturn array rows

    }

    function tambah($data)
    {
        global $koneksi; //mengambil variabel koneksi dari luar function

        //masukkan data sesuai yang diminta, sebagai langkah preventif saya menggunakan htmlspecialchars
        $NIM = htmlspecialchars($data["NIM"]);
        $Nama = htmlspecialchars($data["Nama"]);
        $Alamat = htmlspecialchars($data["Alamat"]);

        //query untuk memasukkan data baru
        $query = "INSERT INTO datamahasiswa
                        VALUES
                        ('', '$NIM', '$Nama', '$Alamat');
                    ";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
        //saat data berhasil dimasukkan, function tambahdata akan mereturn nilai 1
        //saat data gagal dimasukkan, function tambahdata akan mereturn nilai -1
    }

    function hapus($id) {
        global $koneksi; //mengambil variabel koneksi dari luar function

        //query untuk menghapus baris data berdasarkan id yang telah ditentukan
        mysqli_query($koneksi, "DELETE FROM datamahasiswa WHERE id = '$id'");

        return mysqli_affected_rows($koneksi);
        //saat data berhasil dihapus, function hapusdata akan mereturn nilai 1
        //saat data gagal dihapus, function hapusdata akan mereturn nilai -1
    }

    function ubah($data) {
    global $koneksi; //mengambil variabel koneksi dari luar function

    //mengambil data dari input yang diberikan. untuk data id sudah berupa hidden sehingga tidak perlu khawatir akan diganti oleh pengguna
    $id = ($data["id"]);
    $NIM = htmlspecialchars($data["NIM"]);
    $Nama = htmlspecialchars($data["Nama"]);
    $Alamat = htmlspecialchars($data["Alamat"]);

    //query untuk mengganti atau menimpa data
    $query = "UPDATE datamahasiswa SET
                    NIM = '$NIM',
                    Nama = '$Nama',
                    Alamat = '$Alamat'
                    WHERE id = $id
                    ";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
        //saat data berhasil diubah, function tambahdata akan mereturn nilai 1
        //saat data gagal diubah, function tambahdata akan mereturn nilai -1
    }
?>