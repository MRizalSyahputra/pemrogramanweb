<?php
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