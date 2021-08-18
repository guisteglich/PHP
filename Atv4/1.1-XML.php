<!DOCTYPE html><html><body>

<?php
$xml=simplexml_load_file("info.xml");
print_r($xml);

echo "<br>" . $xml->document[0]->nome;
?>

</body></html>