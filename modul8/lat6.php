<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function print_miring($kata, $italic = true)
    { //function untuk mencetak output menjadi miring
        echo $italic ? "<i>" . $kata . "</i>" : $kata;
    }
    function print_tebal($kata, $italic = true)
    { //function untuk mencetak output menjadi tebal
        echo $italic ? "<b>" . $kata . "</b>" : $kata;
    }
    function jumlah($a, $b)
    { //function untuk menjumlahkan variabel
        return ($a + $b); //mereturn hasil penjumlahan
    }
    function kali($a, $b)
    { //function untuk mengalikan variabel
        return ($a * $b);
    }
    print_miring("Isuk isuk tumbas lengo "); //memanggil function print_miring dengan kalimat yang sudah ditentukan
    print_tebal("nyangking botol"); //memanggil function print_tebal dengan kalimat yang sudah ditentukan
    echo "<br/>";
    echo jumlah(3, 7); //mencetak hasil dari pemanggilan function jumlah dengan variabel yang sudah ditentukan
    echo "<br/>";
    echo kali(6, 8); //mencetak hasil dari pemanggilan function kali dengan variabel yang sudah ditentukan
    ?>
</body>

</html>