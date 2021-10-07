<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        * {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
        hr {
            border: 0;
        }
        </style>
</head>
<body>
    <?php
    #string array
    $nama = "AS SYAFAA' BINTI AMRAN";
    echo $nama[1];
    echo $nama[4];
    echo $nama[0];
    echo $nama[6];
    echo "<hr>";

    $pelajar[0] = 'AS';
    $pelajar[1] = "SYAFAA'";
    $pelajar[2] = 'AMRAN';
    echo $pelajar[1];
    echo '<hr>';

    for ($x = 0; $x < 3; $x++) {
        echo $pelajar[$x] . ' ';
    }
    echo '<hr>';

    foreach ($pelajar as $pel) {
        echo $pel . ' ';
    }
    echo '<hr>';

    #join and implode
    $pelajar = implode(' ', $pelajar);
    echo $pelajar;
    echo '<hr>';

    #explode
    $ptss = "POLITEKNIK TUANKU SYED SIRAJUDDIN";
    $kata = explode(' ', $ptss);
    echo $kata[2];
    echo '<hr>';

    $senarai = 'Nur, Minah, Siti, Mawar, Ros';
    echo "<p>Senarai Asal: $senarai</p>";
    $ahli = explode(', ', $senarai);
    echo '<pre>', print_r($ahli), '<pre>';
    echo '<hr>';

    echo '<ol>';
    foreach($ahli as $nama) {
        echo "<li>$nama</li>";
    }
    echo '</ol>';
    echo '<hr>'; 

    $citacita = 'Doktor';
    $hasil = strcmp($citacita, 'Doktor');
    if ($hasil == 0) {
        echo 'Sama';
    } elseif ($hasil < 0) {
        echo 'Kurang';
    } else {
        echo 'Lebih';
    }



    ?>
    
</body>
</html>