<?php
session_start();

if (!isset($_SESSION["login"])) { //jika belum ada session yang menandakan belum login
    header("Location: login.php"); //kembalikan ke halaman login
    exit;
}

    require 'function.php';

    $id = $_GET["id"];

    if( hapusdata($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus!');
                document.location.href = 'Site.php';
            </script>
        ";
    } else {
        echo "
                <script>
                    alert('Gagal menghapus data');
                    document.location.href = 'Site.php';
                </script>
            ";
    }
?>