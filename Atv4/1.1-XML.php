<!DOCTYPE html><html><body>

<?php
$xml=simplexml_load_file("info.xml");
print_r($xml);

echo "<br>" . $xml->info[0]->nome;
echo "<br>" . $xml->info[1]->idade;
?>

</body></html>