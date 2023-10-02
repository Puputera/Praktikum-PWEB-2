<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
        function persegi_panjang($p, $l){
            return $p*$l;
        }
        function lingkaran($r){
            return 3.14*$r*$r;
        }
        ?>
        <form method="POST">
            Masukkan Panjang = <input type="text" name="panjang">
            Masukkan Lebar = <input type="text" name = "lebar">
            <input type="submit" name="hitung" id="button" value="Hitung">
        </form>
        <?php
        if (isset ($_POST['hitung'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
        }
        echo "Luas Persegi Panjang = ".persegi_panjang($panjang, $lebar). "</br>";
        echo "Luas Persegi Lingkaran = ". lingkaran(7). "</br>";
    ?>
</body>
</html>