<?php

Class Flores {
    public $especie, $nome, $mesFlorecencia;

    public function __construct($especie, $nome, $mesFlorecencia){
        $this->especie = $especie;
        $this->nome = $nome;
        $this->mesFlorecencia =$mesFlorecencia;        
    }

    public function __destruct(){
        echo "<br> Objeto destruído! <br>";
    }

    function MostraConteudo() {
        echo "<br>Especie: " . $this->especie;
        echo "<br>Nome: " . $this->nome;
        echo "<br>Mês de florescência: " . $this->mesFlorecencia;
    }
}

Class Flores_De_Verao extends Flores{

   function MostraMes (){
       $this->mesFlorecencia = "janeiro";
       echo "<br> O mes de florescência é: {$this->mesFlorecencia}";

   }
}

$rosa = new Flores("Rosa", "Rosales", "Abril");
$rosa->MostraConteudo();

$orquidea = new Flores_De_Verao("Orquidea","Chave de ouro", "maio");
$orquidea->MostraConteudo();
$orquidea->MostraMes();
?>
