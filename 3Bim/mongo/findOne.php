<!DOCTYPE html>
<html>

<body>
    <?php
        require 'vendor/autoload.php';

        // Tentativa de se conectar
        $connection = new MongoDB\Client;
        $collection = $connection->DBTeste->collectionTeste;
        
        $query = array("tit" => "Tit 2");
        $select = array("edi", "ano");
        
        $res = $collection->findOne( $query, $select );
        print_r($res)
    ?>
       
</body>
</html>