<!DOCTYPE html>
<html>

<body>
    <?php
        require 'vendor/autoload.php';
        // Tentativa de se conectar

        try {
            $connection = new MongoDB\Client;
            echo('Conectado com sucesso');
        } catch (MongoConnectionException $error) {
            die($error->getMessage());
        }

        // Criando Collection
        $db = $connection->DBTeste;
        $collection = $db->Createcollection('collectionTeste');
    ?>
</body>
</html>