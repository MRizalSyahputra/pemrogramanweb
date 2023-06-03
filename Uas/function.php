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

        //masukkan data sesuai yang diminta, sebagai langkah preventif saya tambahkan htmlspecialchars
        $noseri = htmlspecialchars($data["noseri"]);
        $judul = htmlspecialchars($data["judul"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $tahunterbit = htmlspecialchars($data["tahunterbit"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $genre = htmlspecialchars($data["genre"]);

        $query = "INSERT INTO databuku
                        VALUES
                        ('', '$noseri', '$judul', '$pengarang', '$tahunterbit', '$penerbit', '$genre');
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapusdata($id) {
        global $conn; //mengambil variabel conn dari luar function
        mysqli_query($conn, "DELETE FROM databuku WHERE id = '$id'");

        return mysqli_affected_rows($conn);
    }
?>