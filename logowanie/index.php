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

        $con = mysqli_connect('localhost','root','','uzytkownicy') or die('Unable To connect');

        $query = "SELECT * FROM login_user";
        $run = mysqli_query($con,$query) or die(mysqli_error());

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
        }


    }

?>. 

Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?>
</body>
</html>