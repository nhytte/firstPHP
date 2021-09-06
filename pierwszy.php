<?php

$a = $_GET["liczba"];

for ($i = 1; $i <= $a; $i++) {
     $liczba = rand(1,1000);

     if($liczba%2==0){
         echo($liczba);
         echo('<br>');
     }
    
  }
    
?>

<html>
    <head></head>
  <body>
      <form action="" method="GET">
            <input type="text" name="liczba">
            <input type="submit">
      </form>
      
  </body>


</html>