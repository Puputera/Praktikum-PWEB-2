<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    <!-- formulir untuk memasukkan nilai x -->
    <form method="POST">
        Masukkan Nilai X : <input type="text" name = "x">
        <input type="submit" name="button" id="button" value="Proses">
    </form>
    <?php
        //mengambil nilai x yang dimasukkan
        $x = $_POST['x'];
        // $x = 1;
        //menamipilkan nilai x yang diambil
        echo "Nilai X = $x </br> </br>";

        //mengecek nilai x apakah bilangan positif, negatif atau nol
        if ($x>0){
            echo "$x adalah Bilangan Positif";
        }
        else if ($x<0){
            echo "$x adalah Bilangan Negatif";
        }
        else {
            echo "$x adalah Bilangan Nol";
        }
    ?>
</body>
</html>