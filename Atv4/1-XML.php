<!DOCTYPE html><html><body>
<?php

$myXMLData = 
"<?xml version='1.0' encoding='UTF-8'?>
<document>
    <nome>Guilherme</nome>
    <idade>21</idade>
    <sexo>m</sexo>
    <profissao>Estudante</profissao>
    <salario>500</salario>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Falha ao carregar o XML: ";
    foreach(libxml_get_errors() as $error){
        echo "<br>", $error->message;
    }
} else { print_r($xml); }

?></body></html>



