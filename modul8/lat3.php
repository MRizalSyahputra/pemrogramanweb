<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipe Data dan Casting</title>
</head>
<body>
    <?php
    $angka = 7.62;
    $word = "wibu stress";

    var_dump(is_int($angka)); //mengecek apakah variabel angka merupakan integer
    echo "<br/>";
    var_dump(is_string($word)); //mengecek apakah variabel word merupakan string
    echo "<br/>";

    $jawaban = true;
    $mix = "12341ambassador";
    $mix2 = "3141goddess1241";
    echo "<br/>";
    echo gettype($jawaban); //memberitahu apa tipe data dari variabel jawaban
    echo "<br/>";
    $numbers = (int) $mix; //mengambil data integer dari variabel mix yang kemudian didefinisikan sebagai data dari variabel numbers
    var_dump($numbers); //melakukan dumping pada variabel numbers
    echo "<br/>";
    $alpha = (String) $mix; //mengambil data string dari variabel mix yang kemudian didefinisikan sebagai data dari variabel alpha
    var_dump($alpha); //melakukan dumping pada variabel alpha
    echo "<br/>";
    $numbers2 = (int) $mix2; 
    var_dump($numbers2);
    echo "<br/>";
    $alpha2 = (String) $mix2;
    var_dump($alpha2);

    // untuk bentuk seperti mix2, jika mengambil data integer maka yang terdeteksi hanya angka depannya, sementara angka di belakang huruf dianggap string
    ?>
</body>
</html>