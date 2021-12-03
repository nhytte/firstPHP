<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if($_SESSION["name"]) {
?>
Welcome



<?php echo $_SESSION["name"]; 

    

    if($_SESSION["name"] == "admin"){

        $liczba = 0;
        echo("<br> ID do usunięcia  <br>");
        echo("<form method=\"GET\"> <input type=\"number\" name=\"idusun\" id=\"idusun\"> <input type=\"submit\" value=\"Wyślij\" name=\"guzik\"> </form>");
        $con = mysqli_connect('localhost','root','','uzytkownicy') or die('Unable To connect');

        $query = "SELECT * FROM login_user";
        

        if(isset($_GET['guzik'])){
            $idd = $_GET["idusun"];
            if($idd == 3){
                echo "Hej! Nie możesz usunąć admina";
            } else{
                
                $query2 = "DELETE FROM login_user WHERE id=$idd";
                
                $run2 = mysqli_query($con,$query2);
                $run = mysqli_query($con,$query);
                

                if($run)
                    {
                        echo "<p>";
                        echo "<table border=\"1\"><tr>";
                        echo "<td><strong>ID</strong></td>";
                        echo "<td><strong>name</strong></td>";
                        echo "<td><strong>loginn</strong></td>";
                        echo "<td><strong>password</strong></td>";
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
                        $liczba = 1;
                    }
            }


        }
        
        if($liczba == 0){
            $query = "SELECT * FROM login_user";
            $run = mysqli_query($con,$query);
            if($run)
        {
            echo "<p>";
            echo "<table border=\"1\"><tr>";
            echo "<td><strong>ID</strong></td>";
            echo "<td><strong>name</strong></td>";
            echo "<td><strong>loginn</strong></td>";
            echo "<td><strong>password</strong></td>";
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
            $liczba = 0;
        }

        }
       

        


    }

?>
Click here to <a href="logout.php" tite="Logout">Logout.

<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>