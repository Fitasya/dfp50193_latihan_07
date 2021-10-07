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
    $tajuk = '<h1><Hello World!></h1>';
    $isi = 'You are great';
    echo $tajuk . $isi;
    ?>
    <p>
        Bilangan huruf untuk tajuk = <?php echo strlen($tajuk); ?>
    </p>

    <?php
    $nama = 'AS SYAFAA BINTI AMRAN';
    $cari = strstr($nama, 'SYA');
    echo "<p>$cari</p>";

    $nomatrik = "18DDT19F1140";
    $bilangan = strstr($nomatrik, 'F');
    echo "<p>Bilangan: $bilangan</p>";

    $lokasi = strpos($nomatrik, 'T');
    echo "<p>No. Matrik: $nomatrik<br>Lokasi (T): $lokasi</p>";

    $kod = substr($nomatrik,2,3);
    echo "<p>$kod</p>";

    $lokasi = strpos($nomatrik, 'F') + 1;
    $bilangan = substr($nomatrik, $lokasi, 2);
    echo "<p>Bilangan $bilangan</p>";

    ?>

</body>

</html>