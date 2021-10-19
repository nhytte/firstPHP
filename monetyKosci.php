<!DOCTYPE html>
<html lang="en">
<head>
    <title>rzut kostka</title>
</head>
<body>
    
</body>
</html>

<?php
    $orzel = 0;
    $reszka = 0;

    echo ("<h3> 100x RZUT MONETĄ! </h3>");

    for($i = 0; $i < 100; $i++){
        $ran = rand(1,2);
        if($ran==1){
            $orzel++;
        }else{
            $reszka++;
        }
    }

    echo("Ilosc orlow: ". $orzel . ", ilosc reszek: ". $reszka . "<br>");

    if($orzel == $reszka){
        echo("REMIS!");
    }elseif($orzel > $reszka){
        echo("ORZEŁ WIN!");
    }else{
        echo("RESZKA WIN!");
    }

    echo("<br> <br>");
    echo ("<h3> RZUT KOSTKĄ! </h3>");
    $kostka = rand(1,6);
    
    switch($kostka){
        case 1:
            echo("Wylosowano: 1");
            break;
        case 2:
            echo("Wylosowano: 2");
            break;
        case 3:
            echo("Wylosowano: 3");
            break;
        case 4:
            echo("Wylosowano: 4");
            break;
        case 5:
            echo("Wylosowano: 5");
            break;
        case 6:
            echo("Wylosowano: 6");
            break;
    }
?>