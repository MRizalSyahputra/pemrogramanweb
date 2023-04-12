<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <?php
    $i = 0; //inisialisasi variabel i
    $j = 9; //inisialisasi variabel j

    while ($i < 10) { //while loop
        echo $i;
        echo "<br/>";
        $i++;
    }
    echo "<br/>";
    do { //do while loop
        echo $j;
        echo "<br/>";
        $j--;
    } while ($j > 0);
    echo "<br/>";
    for ($i = 0; $i < 10; $i++) { //for loop
        $j = 6; //variabel tetap harus diinisialisasi dalam loop, jika tidak maka tidak akan terdeteksi bahkan walaupun sudah dinisialisasi di atas
        $k = $i + $j;
        echo $k;
        echo "<br/>";
    }
    ?>
</body>

</html>