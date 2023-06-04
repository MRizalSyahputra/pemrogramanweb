<?php 
    //menghubungkan situs dengan database
    $conn=mysqli_connect("localhost", "root" , "" , "pemroweb" );
    
    function query ($query) { 
        global $conn; //mengambil variabel conn dari luar function

        //ambil data dari tabel
        $result = mysqli_query($conn, $query); 
        $rows=[]; //membuat array baru untuk menampung data sementara
        
        while( $row=mysqli_fetch_assoc($result) ) {  //akan diambil data selama masih ada baris yang berisi data
            $rows [] = $row; //memasukkan baris data dalam array
        } 
        return $rows; //mereturn array rows
    }
    
    function tambahdata($data) {
        global $conn; //mengambil variabel conn dari luar function

        //masukkan data sesuai yang diminta, sebagai langkah preventif saya menggunakan htmlspecialchars
        $noseri = htmlspecialchars($data["noseri"]);
        $judul = htmlspecialchars($data["judul"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $tahunterbit = htmlspecialchars($data["tahunterbit"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $genre = htmlspecialchars($data["genre"]);

        //query untuk memasukkan data baru
        $query = "INSERT INTO databuku
                        VALUES
                        ('', '$noseri', '$judul', '$pengarang', '$tahunterbit', '$penerbit', '$genre');
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
        //saat data berhasil dimasukkan, function tambahdata akan mereturn nilai 1
        //saat data gagal dimasukkan, function tambahdata akan mereturn nilai -1
    }

    function hapusdata($id) {
        global $conn; //mengambil variabel conn dari luar function

        //query untuk menghapus baris data berdasarkan id yang telah ditentukan
        mysqli_query($conn, "DELETE FROM databuku WHERE id = '$id'");

        return mysqli_affected_rows($conn);
        //saat data berhasil dihapus, function hapusdata akan mereturn nilai 1
        //saat data gagal dihapus, function hapusdata akan mereturn nilai -1
    }

    function ubahdata($data) {
    global $conn; //mengambil variabel conn dari luar function

    //mengambil data dari input yang diberikan. untuk data id sudah berupa hidden sehingga tidak perlu khawatir akan diganti oleh pengguna
    $id = ($data["id"]); 
    $noseri = htmlspecialchars($data["noseri"]);
    $judul = htmlspecialchars($data["judul"]);
    $pengarang = htmlspecialchars($data["pengarang"]);
    $tahunterbit = htmlspecialchars($data["tahunterbit"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $genre = htmlspecialchars($data["genre"]);

    //query untuk mengganti atau menimpa data
    $query = "UPDATE databuku SET
                    noseri = '$noseri',
                    judul = '$judul', 
                    pengarang = '$pengarang', 
                    tahunterbit = '$tahunterbit', 
                    penerbit = '$penerbit', 
                    genre = '$genre'
                    WHERE id = $id
                    ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
        //saat data berhasil diubah, function tambahdata akan mereturn nilai 1
        //saat data gagal diubah, function tambahdata akan mereturn nilai -1
    }

    function cari($keyword) {
        //query untuk mencari data. Data akan ditampilkan apabila memiliki kecocokan dengan kata kunci yang telah dimasukkan
        //penggunaan LIKE bertujuan agar pengguna tidak harus memasukkan data yang lengkap dan akan dicocokkan apabila ada data yang memiliki unsur tersebut
        $query = "SELECT * FROM databuku WHERE
                noseri LIKE '%$keyword%' OR
                judul LIKE '%$keyword%' OR
                pengarang LIKE '%$keyword%' OR 
                tahunterbit LIKE '%$keyword%' OR 
                penerbit LIKE '%$keyword%' OR
                genre LIKE '%$keyword%'
                ";
        return query($query);
    }
?>