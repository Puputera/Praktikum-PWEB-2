<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
        //perulangan for menampilkan bilangan genap
        echo "Perulangan FOR Bilangan Genap dari 1 hingga 10</br>";
        for ($x=2; $x<=10; $x+=2)
            echo "$x </br>";

        //perulangan while menampilkan bilangan ganjil
        echo "</br>Perulangan WHILE Bilangan Ganjil dari 1 hingga 10</br>";
        $y=1;
        while($y<=10){
            echo "$y </br>";
            $y+=2;
        }

        //perulangan do whil menampilkan bilangan prima
        echo "</br>Perulangan DO WHILE Bilangan Prima kurang dari 20</br>";
        $z=2; //deklarasi variabel
        do{
            $prima=true;
            //perulangan for untuk pengecekan bilangan prima
            for ($a=2; $a<$z; $a++){
                if (($z%$a)==0){
                    $prima=false;
                    break;
                }
            }
            //jika bilangan prima akan ditampilkan dilayar
            if ($prima){
                echo "$z </br>";
            }  
            $z++;  //nilai bertambah
        }
        //kembali ke do ketika nilai<=20
        while ($z<=20);
        ?>
</body>
</html>