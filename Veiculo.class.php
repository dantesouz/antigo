<?php

class Veiculo{
//Atributos:
public $marca;
public $modelo;
public $ano;
public $cor;
public $preco_zero;


//Métodos (ações)
public function __construct($marca, $modelo, $ano, $cor, $preco_zero){ 
$this->marca = $marca;
$this->modelo = $modelo;
$this->ano = $ano;
$this->cor = $cor;
$this->preco_zero = $preco_zero;
}
    


public function MostrarDados(){
    echo "=====================================<br>";
    echo "Marca: {$this->marca} <br>";
    echo "Modelo: {$this->modelo} <br>";
    echo "Ano: {$this->ano} <br>";
    echo "Cor: {$this->cor} <br>";
    echo "Preco zero: R$" . number_format($this->preco_zero, 2, ',', ',') . "<br>";
    echo "=====================================<br>"; 
}
public function CalcularIdade(){
    $anoAtual = date("Y");
   return $anoAtual - $this->ano;
}
public function CalcularDepreciacao(){
    $anoAtual = date("Y");
    return(( $anoAtual - $this->ano) * 430) + 2100;
}
public function ehNovo(){
    
    return ($this->CalcularIdade() <= 2);
}
public function pintarVeiculo($novaCor){
    $this->cor = $novaCor;
}
}
?>