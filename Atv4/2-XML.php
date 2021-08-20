<?php
$xml=simplexml_load_file("dogs.xml");
echo $xml->getName() . "<br>";

echo "<br>Esse é o terceiro: " . $xml->cachorro[0]->raca . "<br>";

foreach($xml->cachorro[0] as $dog3){
    echo "Informações do terceiro: " .$dog3 . "<br>";
}

foreach($xml->children() as $dog)
  {
      
      echo $dog->raca. ", ";
      echo $dog->porte . "<br>";
  }


  foreach($xml->children() as $dog)
  {
      
      echo "valor médio da raça: ". $dog->vmraca. "<br>";
  }
?>


