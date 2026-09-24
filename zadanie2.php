<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   for($count3=0, $np=0, $p=0, $i=0, $j=1; $i<100; $i++, $j++){
    if($j%3==0 && $j%2==0){
    echo $j." parzysta, podzielna przez 3 <br>";
        $p=$p+$j;
        $count3=$count3+1;
    }
    elseif($j%3==0){
        echo $j." nieparzysta, podzielna przez 3 <br>";
        $np=$np+$j;
        $count3=$count3+1;
    }
    elseif($j%2==0){
        echo$j. " parzysta <br>";
        $p=$p+$j;
    }
    else{
        echo$j. " nieparzysta <br>";
        $np=$np+$j;
    }
}
echo"<br>";
echo "Suma wszystkich liczb:" .$p+$np."<br>";
echo "Suma liczb parzystych :".$p."<br>";
echo "Suma liczb parzystych :".$np."<br>";
echo "Liczb podzielnych przez 3: ".$count3;
?>
    </body>
    </html>