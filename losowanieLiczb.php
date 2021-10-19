<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <table>
            <tr>
                <td>Początek zakresu:</td>
                <td><input type="number" name="first"></td>
            </tr>
            <tr>
                <td>Koniec zakresu: </td>
                <td><input type="number" name="last"></td>
            </tr>
            <tr>
                <td>Ilość losowań:</td>
                <td><input type="number" name="ile"> </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="losuj" value="Losuj"></td>
            </tr>
        </table>

    </form>   
</body>
</html>

<?php
    if(isset($_GET["losuj"])){
    $first = $_GET["first"];
    $last = $_GET["last"];
    $ile = $_GET["ile"];
    
    
        for($i = 0; $i < $ile; $i++){
            $ran = rand($first,$last);
            echo($i+1 . " liczba to: ". $ran . "<br>");
        }
    }

?>