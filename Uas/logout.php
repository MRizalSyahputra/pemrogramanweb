<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>berhasil logout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(bec.png);
        }
    </style>
</head>

<body>
    <header>
        <br />
        <br />
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div style="background-color: whitesmoke;">
                    <h1>Anda sudah berhasil logout!</h1>
                    <br />
                    <p>Silahkan klik <a href=login.php>di sini</a> untuk login kembali</p> <!--kembali ke login page-->
                </div>
            </div>
        </div>
    </div>

</body>

</html>