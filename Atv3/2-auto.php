<?php

 Class Auto{
     public $modelo, $ano, $marca;

     public function __construct($m, $a, $mc){
        $this->modelo = $m;
        $this->ano = $a;
        $this->marca =$mc;        
    }

    public function __destruct(){
        echo "<br> Objeto destruído!";
    }

 }

 Class Caminhao extends Auto{
     public $rodas, $capacidade;

     function __construct($m, $a, $mc, $r, $c){
         parent::__construct($m, $a, $mc);
         $this->rodas = $r;
         $this->capacidade = $c;
     }

     function MostraCapacidade(){
         echo "<br> A capacidade é de: {$this->capacidade}";
     }
 }

 Class Carro extends Auto{
     public $lugares, $cor;

     function __construct($m, $a, $mc, $l, $cr){
        parent::__construct($m, $a, $mc);
        $this->lugares = $l;
        $this->cor = $cr;
    }

    function MostraCor(){
        echo "<br> A cor é: {$this->cor}";
    }
 }

 $argo = new Carro("Argo", "2020", "Fiat", "5", "Preto");
 $argo->MostraCor();

 $Vw271930 = new Caminhao("271930", "2008", "Volkswagem", "16", "100kg");
 $Vw271930->MostraCapacidade();

?>
