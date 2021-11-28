<!DOCTYPE html>
<html>

<body>
    <?php
        require 'vendor/autoload.php';
        
        $connection = new MongoDB\Client;
        $collection = $connection->DBTeste->collectionTeste;
        

        for($i = 1; $i <= 5; $i++ ) {
            $document = array(
                "tit" => "Tit $i",
                "edi" => "Edi $i",
                "ano" => rand(2000, 2010)
            );
            
            $collection->insertOne($document);

            $j = 6 - $i;
            $document = array(
                "tit" => "Tit $j",
                "nPg" => rand(35, 99),
                "ano" => rand(2000, 2010)
            );

            $collection->insertOne($document);
        }

        echo("Dados inseridos com sucesso")
    ?>
       
</body>
</html>