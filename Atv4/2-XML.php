<!DOCTYPE html><html><body>

<?php
   
   $xml = simplexml_load_file("./cachorros.xml");

   echo "<br>" . $xml->cachorro[0]->nome;
   echo "<br>" . $xml->cachorro[1]->nome;
   
?>


</body></html>