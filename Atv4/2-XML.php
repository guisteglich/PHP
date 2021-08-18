<!DOCTYPE html><html><body>

<?php
   
   $xml = simplexml_load_file("./cachorros.xml");

   echo "<br>" . $xml->cachorro[2]->raca;

   foreach ($xml->children() as $dog) {
       echo $dog->raca . ",";
       echo $dog->porte . "<br>";
   }
   
?>


</body></html>