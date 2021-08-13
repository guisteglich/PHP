<?php

Class Pessoa{
    public $nome,$profissao, $estadocivil;
    private $idade; 

    public function __construct($n, $p, $ec){
        $this->nome = $n;
        $this->profissao = $p;
        $this->estadocivil =$ec;        
    }

    public function __destruct(){
        echo "<br> Objeto destruído!";
    }

    public function MostraPessoa(){
        echo "<br>Nome: " . $this->nome;
        echo "<br>Profissão: " . $this->profissao;
        echo "<br>Estado Civil: " . $this->estadocivil;
        echo "<br>Atenção: Os dados privados não são mostrados<br>";
        // echo "<br>Idade: " . $this->idade;
    }
}

$pessoa1 = new Pessoa("Guilherme Steglich", "Estudante", "Solteiro");
// $pessoa1->nome = "Guilherme Steglich";
// $pessoa1->profissao = "Estudante";
// $pessoa1->estadocivil = "Solteiro";
// $pessoa1->idade = "21 anos";

$pessoa1->MostraPessoa();

$pessoa2 = new Pessoa("Pedro Geromel", "Atleta", "Casado");
// $pessoa2->nome = "Pedro Geromel";
// $pessoa2->profissao = "Atleta";
// $pessoa2->estadocivil = "Casado";
// $pessoa2->idade = "35 anos";

$pessoa2->MostraPessoa();

// $pessoa1->__destruct();
// $pessoa2->__destruct();

?>