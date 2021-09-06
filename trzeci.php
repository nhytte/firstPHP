<?php
    $a = $_POST["liczba"];
    $b = $a;

    for($i = 0; $i <= $b; $i++){
        echo fib($a);
        $a -= 1;
        echo "<br>";
    }

    function fib($a){
        if($a==1){
            return 1;
        }else if($a==0){
            return 0;
        }else{
            return fib($a-1)+fib($a-2);
        }
    }


    


   
?>

<html>
    <head>

    </head>
    <body>
         <form action="" method="POST">
            <input type="text" name="liczba">
            <input type="submit">
        </form>
    </body>
</html>