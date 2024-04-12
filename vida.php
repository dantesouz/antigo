<?php

require_once('Humano.class.php');
require_once('Ferramentas.class.php');
$humano = new Humano("Deva", 3.5, "Masculino");

$humano->MostrarDados();
$humano->FazerAniversario();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->FazerAniversario();
$humano->Comer();
$humano->MostrarDados();
$humano->Comer();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Exercitar();
$humano->FazerAniversario();
$humano->Trabalhar();
$humano->MostrarDados();
$humano->FazerAniversario();
$humano->Comer();

echo Ferramentas::$pi;

Ferramentas::CalcularDescontoFolha();

?>
