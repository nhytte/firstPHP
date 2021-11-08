<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <div class="container">
        <div class="gora">
            <h2 id="portal">PORTAL OGLOSZENIOWY</h2>
        </div>
        <div class="lewo">
            <h2>
                Kategorie ogłoszeń
            </h2>
                <ol type="I">
                    <li>Książki</li>
                    <li>Muzyka</li>
                    <li>Filmy</li>
                </ol>

            <img id="ksiazka" src="ksiazki.jpg" height="300px" width="200px">
            
                <table>
                    <tr>
                        <td>Liczba ogłoszeń</td>
                        <td>Cena ogłosenia</td>
                        <td>Bonus</td>
                    </tr>
                    <tr>
                        <td>1 - 10</td>
                        <td>1 PLN</td>
                        <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
                    </tr>
                    <tr>
                        <td>11 - 50</td>
                        <td>0,80 PLN</td>
                        
                        
                    </tr>
                    <tr>
                        <td>51 i więcej</td>
                        <td>0,60 PLN</td>
                        
                    </tr>
                </table>
            

        </div>
        <div class="prawo">
            <h2>Ogłoszenie kategorii książki</h2>
            <?php

    $db = 'localhost';
    $uname = 'root';
    $pass = '';
    $db_name ='ogloszenia';

    
    $conn = mysqli_connect($db, $uname, $pass, $db_name);
    mysqli_select_db($conn, $db_name);
    

    $query  = "SELECT ogloszenie.id, tytul, tresc, telefon FROM ogloszenie, uzytkownik WHERE uzytkownik.id = ogloszenie.uzytkownik_id AND kategoria=1;";

    $run = mysqli_query($conn, $query);

    while($row = mysqli_fetch_row($run)){
        echo "<h3>".$row[0]." ".$row[1]."</h3>";
        echo $row[2];
        echo "<p> Telefon kontaktowy: ".$row[3]."</p>";
    }

    

?>
        </div>
        <div class="stopka">
            Kacper Domański 4K
        </div>


    </div>
    

    
</body>
</html>


