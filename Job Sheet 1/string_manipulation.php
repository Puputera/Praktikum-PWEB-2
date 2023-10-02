<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php
    $x ="Selamat Belajar PHP!";
    echo $x ;
    //mengubah string menjadi huruf kapital
    echo strtoupper($x);
    //mengubah string menhadu huruf kecil
    echo strtolower($x);
    //memotong string (string, awal, akhir)
    echo substr($x,0,7);
    ?>
</body>
</html>