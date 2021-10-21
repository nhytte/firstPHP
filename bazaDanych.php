<!DOCTYPE html>
<html>
<head>

</head>

<body>
        <form method="GET">

        <h3>DODAWANIE</h3>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="number" name="id"></td>
            </tr>
            <tr>
                <td>Imie:</td>
                <td><input type="text" name="imie"></td>
            </tr>
            <tr>
                <td> Nazwisko:</td>
                <td><input type="text" name="nazwisko"></td>
            </tr>
            <tr>
                <td>Srednia:</td>
                <td><input type="number" step="0.01" name="srednia"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="dodaj" name="guzik"/></td>
            </tr>

        </table>
        <h3>USUWANIE</h3>
        <table>
            <tr>
                <td>ID do usuniecia:</td>
                <td><input type="number" name="id1"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Usun" name="usun"/></td>
            </tr>
        </table>
        <h3>AKTUALIZACJA</h3>
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="number" name="id2"/></td>
            </tr>
            <tr>
                <td>Imie:</td>
                <td><input type="text" name="imie2"/></td>
            </tr>
            <tr>
                <td>Nazwisko:</td>
                <td><input type="text" name="nazwisko2"/></td>
            </tr>
            <tr>
                <td>Srednia:</td>
                <td><input type="number" step="0.01" name="srednia2"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="up"/><br><br><br></td>
            </tr>
        </table>   
             

        <strong>UPDATE</strong> <br><br>

              
            
            
             
            
        </form>

<?php

    $host = "localhost";
    $name_db = "root";
    $pass_db = "";
    $db = "phptest";

    $con = mysqli_connect($host, $name_db, $pass_db, $db);
    mysqli_select_db($con, $db);


    //DODAWANIE

    if(isset($_GET['guzik']))
    {

        $id = $_GET['id'];
        $imie = $_GET['imie'];
        $nazwisko = $_GET['nazwisko'];
        $srednia = $_GET['srednia'];

        $query = "SELECT * FROM uczen";
        $query1 = "Insert into uczen(id, imie, nazwisko, srednia) values('$id', '$imie', '$nazwisko', '$srednia')";
        $run1 = mysqli_query($con,$query1) or die (mysqli_error());
        $run = mysqli_query($con,$query) or die (mysqli_error());

        if($run)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run))
            {
                
                echo "</tr>";
                echo "<td bgcolor=\"gray\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[3] . "</td>";
                echo "</tr>";

                
                
            }

            echo "</table>";
        }
    }

    //USUWANIE

    if(isset($_GET['usun']))
    {
        $id1 = $_GET['id1'];
        $query2 = "DELETE FROM uczen WHERE id = $id1";
        $query3 = "SELECT * FROM uczen";
        $run2 = mysqli_query($con,$query2) or die(mysqli_error());
        $run3 = mysqli_query($con,$query3) or die(mysqli_error());

        if($run3)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run3))
            {
                echo "</tr>";
                echo "<td bgcolor=\"gray\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[3] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }


    //MODYFIKACJA

    if(isset($_GET['up']))
    {
        $id2 = $_GET['id2'];
        $imie1 = $_GET['imie2'];
        $nazwisko1 = $_GET['nazwisko2'];
        $srednia1 = $_GET['srednia2'];

        $query4 = "UPDATE uczen SET imie = '$imie1', nazwisko = '$nazwisko1', srednia = '$srednia1' WHERE id = $id2";
        $query5 = "SELECT * FROM uczen";

        $run4 = mysqli_query($con,$query4) or die(mysqli_error());
        $run5 = mysqli_query($con,$query5) or die(mysqli_error());

        if($run5)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>Imie</strong></td>";
            echo "<td><strong>Nazwisko</strong></td>";
            echo "<td><strong>Srednia</strong></td>";
            echo "</tr>";

            while($row=mysqli_fetch_row($run5))
            {
                echo "</tr>";
                echo "<td bgcolor=\"gray\">" . $row[0] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[1] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[2] . "</td>";
                echo "<td bgcolor=\"gray\">" . $row[3] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        }
    }

?>
</body>
</html>