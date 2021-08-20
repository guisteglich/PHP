<?php

$parser = xml_parser_create();

function fstar($parserm, $element_name, $element_attrs){
    switch($element_name){
        case "PESSOAS": echo "Pessoas <br>";
                        break;
        case "NOME": echo "Nome <br>";
                        break;
        case "IDADE": echo "Idade <br>";
                        break;
        case "SEXO": echo "Sexo <br>";
                        break;
        case "PROFISSÃO": echo "Profissão <br>";
                        break;
        case "SALARIO": echo "Salario <br>";
    }
}

function fstop($parserm, $element_name) {echo '<br>';}
function fchar($parserm, $data) {echo $data;}

xml_set_element_handler($parser, "fstart", "fstop");
xml_set_character_data_handler($parser, "fchar");

$fp=fopen("info.xml", "r");

while ($data=fread($fp, 4096)) {
    xml_parse($parser, $data, feof($fp)) or die ("Erro!");
}

xml_parser_free($parser);


?>