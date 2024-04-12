<?php

require_once('SuperHeroi.class.php');

$heroi = new SuperHeroi("Hive", "Krull");
$heroi->ExibirStatus();
$heroi->Atacar();
$heroi->Atacar();
$heroi->ExibirStatus();

for($i=0; $i<=10; $i++){
    $heroi->LevarDano();
}
$heroi->Atacar();
$heroi->ExibirStatus();







?>