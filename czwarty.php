<?php

    $users = ["bokser","lekarz","ogrodnik","kurier","kucharz"];
    $hasla  = ["11","22","33","44","55"];

    $uname = $_POST["login"];
    $pass = $_POST["pass"];

    foreach($login as $username => $pass){
        if($)
    }

    
    





 /*for($i = 0; $i <= sizeof($loginy); $i++){
    if($login == $loginy[$i] && $pass== $hasla[$i]){
        echo("zostałeś zalogowany");
        echo(strlen($loginy[$i])+ strlen($hasla[$i]));
        break;
    }
    if(sizeof($loginy)==$i){
        echo("nara");
        break;
    }
}*/
    

?>

<html>
    <head>

    </head>
    <body>
         <form action="" method="POST">
            <input type="text" name="login">
            <input type="text" name="pass">
            <input type="submit" name="oblicz" value="oblicz">
        </form>
    </body>
</html>