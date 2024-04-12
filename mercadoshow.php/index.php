<?php

require_once('Produtos.class.php');

$produtos = new Produtos();

$tabela = $produtos->Listar();
viewprodutos
print_r($tabela);

/*
$produtos->nome= 'escova';
$produtos->preco= 2.00;
$produtos->quantidade= 4; 
$produtos->id_categoria= 1; 
$produtos->id_fornecedor= 1;
$produtos->Cadastrar();
$tabela = $produtos->Listar();
print_r($tabela);


$produtos->nome= 'shampo';
$produtos->preco= 18.00;
$produtos->quantidade= 5; 
$produtos->id_categoria= 2; 
$produtos->id_fornecedor= 2;
$produtos->Cadastrar();
$tabela = $produtos->Listar();
print_r($tabela);
*/

$produtos->id= 1;
$produtos->Apagar();
$tabela = $produtos->Listar();
print_r($tabela);


$produtos->id= 2; 
$produtos->nome= 'shampo';
$produtos->preco= 18.00;
$produtos->quantidade= 5; 
$produtos->id_categoria= 2; 
$produtos->id_fornecedor= 2;

$produtos->Modificar();

print_r($tabela);





?>