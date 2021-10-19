<html>
    <head>

    </head>
    <body>

         <form action="" method="POST">
            Login: <input type="text" name="login"> <br>
            Haslo: <input type="text" name="pass"> <br>
            <input type="submit" name="zaloguj" value="Zaloguj się!">
        </form>
    </body>
</html>

<?php

    

    $logins = array('Kacper' => '123','Olek' => '321', 'Ala' => '456');

    if(isset($_POST["zaloguj"])){
        $username = $_POST["login"];
        $pass = $_POST["pass"];

        if (isset($logins[$username]) && $logins[$username] == $pass){
            echo ("Zalogowano pomyślnie <br>");
            echo ("Zalogowany użytkownik: ". $username);
        } else {
            echo ("Zła nazwa użytkownika lub hasło");
        }

        
    } 

?>