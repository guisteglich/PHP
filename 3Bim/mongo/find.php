<!DOCTYPE html>
<html>

<body>
    <?php
        require 'vendor/autoload.php';

        // Tentativa de se conectar
        $connection = new MongoDB\Client;
        $collection = $connection->DBTeste->collectionTeste;
        
        $query = array("tit" => "Tit 1");
        $select = array("edi", "ano");
        
        $res = $collection->find( $query, $select );
        foreach($res as $document) {
            print_r($document);
            echo"<br>";
        }
    ?>
       
</body>
</html>