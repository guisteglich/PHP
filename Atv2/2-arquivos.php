<?php

    $fileName = "test.txt";

    #abrindo o arquivo
    $file = fopen($fileName, 'w')
    or die ("Falha ao abrir arquivo");

    #escrevendo no arquivo
    fwrite($file, "Aqui tem um teste de escrita");
    fwrite($file, "Depois há outro");
    fwrite($file, "Em seguida mais um");

    #fechando o arquivo
    fclose($file);

    #abrindo o mesmo arquivo
    $fileReopen = fopen("test.txt", 'a+')
    or die ("Falha ao abrir arquivo para leitura/escrita");

    #escrevendo mais no arquivo
    fwrite($fileReopen, "E por fim, um último");

    #lendo as informações do arquivo
    echo readfile($fileReopen);

    #fechando o arquivo
    fclose($file);

?>