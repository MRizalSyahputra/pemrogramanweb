<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan seleksi</title>
</head>
<body>
    <?php
    $a = 23;
    $b = 31;
    $c = 5;
    $d = 9;

    if ($a > $b) {
    echo "a lebih besar dari b";
    } elseif ($a == $b) {
    echo "a sama dengan b";
    } else {
    echo "a kurang dari b";
    }
    echo "<br/>";

    switch ($c) {
        case 1 :
            echo "bilangan satu";
        case 2 :
            echo "bilangan dua";
        case 3 :
            echo "bilangan tiga";
        case 4 :
            echo "bilangan empat";
        case 5 :
            echo "bilangan lima";
        default : 
            echo "bilangan random";       
            echo "<br/>";
    }

    switch ($d) {
        case 1 :
            echo "bilangan satu";
        case 2 :
            echo "bilangan dua";
        case 3 :
            echo "bilangan tiga";
        case 4 :
            echo "bilangan empat";
        case 5 :
            echo "bilangan lima";
        default : 
            echo "bilangan random";
    }
    ?>
</body>
</html>