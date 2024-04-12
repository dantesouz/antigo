<?php
class Pessoa{
//Atributos
private $nome;
private $idade;
private $profissao;

// Construtor da classe
public function __construct($nome, $idade, $profissao){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->profissao = $profissao;

}
public function getNome(){
    echo "$this->nome";
}
public function getIdade(){
    echo "$this->idade";
}
public function getProfissao(){
    echo "$this->profissao";
}
public function MostrarDados(){
    echo"==========================<br>
    Nome: $this->nome<br>
    Idade: $this->idade<br>
    Profissão: $this->profissao<br>";
}
}

?>