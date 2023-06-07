<?php
    include('koneksi.php'); //menghubungkan dengan file koneksi.php

    $id = $_GET["id"]; //menangkap id yang dikirimkan dari URL

    if( hapus($id) > 0) { //jika data berhasil dihapus, cetak alert ini
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'situs.php';
            </script>
        ";
    } else { //jika data gagal dihapus, cetak alert ini
        echo "
                <script>
                    alert('Gagal menghapus data');
                    document.location.href = 'situs.php';
                </script>
            ";
    }
