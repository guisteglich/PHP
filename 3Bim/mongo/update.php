<!DOCTYPE html>
<html>

<body>
    <?php
        require 'vendor/autoload.php';

        $connection = new MongoDB\Client;
        $collection = $connection->DBTeste->collectionTeste;
        
        $new = array(
            "tit" => "-----",
            "edi" => "-----"
        );

        $query = array("tit" => "Tit 4");
        $collection->updateOne( $query, $new);

        $query = array("tit" => "Tit 3");
        $collection->updateOne( $query, array('$set' => $new));

        $res = $collection->find();
        foreach($res as $document) {
            print_r($document);
            echo "<br>";
        }
    ?>
       
</body>
</html>