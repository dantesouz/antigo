<?php
require_once("Pessoa.class.php");
$pessoa1 = new Pessoa("Nikolai Rimsk-Korsakov", 45, "Compositor");
$pessoa2 = new Pessoa("Stephen King", 50, "Escritor");

//Traz o nome, idade e profissão da pessoa
echo "Pessoa 1:<br>";
$pessoa1->MostrarDados();
echo "<br>";
echo "Pessoa 2:<br>";
$pessoa2->MostrarDados();
?>