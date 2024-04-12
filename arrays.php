<?php

$nomes = ["dante", "thomas", "otto", "ania"];
//echo $nomes[0]; $nomes[1]; $nomes[2];

for($i = 0; $i <= 3; $i++){
    echo $nomes[$i] . "<br>";
}
echo "=====================================================================<br>";

echo "<h4>Exercícios de for, array_sum e cont<h4>" . "<br>";

echo "<h4>Mostre nomes de Filmes<h4>";

$filmes = ["Pulp Fiction", "Star Wars", "Tweelve Monkeys", "Interstelar", "Mirror Mask"];

for($i = 0; $i <= 4; $i++){
    echo "<h3>Filmes<h3>" . $filmes[$i] . "<br>";
    
}

echo "=====================================================================<br>";

echo "<h4>Mostre Idades<h4>";
$idade = ["15", "16", "27", "99", "13"];

for($i = 0; $i <= 4; $i++){
    echo $idade[$i] . "<br>";
}

echo "=====================================================================<br>";


$idade = ["15", "16", "27", "99", "13"];

for($i = 0; $i <= 4; $i++){
    echo $idade[$i] . "<br>";
}

echo "=====================================================================<br>";

$notas = ["9.3", "10.7", "9.7", "9.6", "7.9"];
$media = array_sum($notas) / count($notas);
echo "A média do aluno é " . $media . "<br>";


echo "=====================================================================<br>";

$animes = ["Death note", "Dragon ball", "Attack of Titan", "Sandman", "Bersek", "True Blood"];
for($i=0+1; $i<count($animes); $i++){
    echo "Animes $i: " . " " . $animes[$i] . "<br>";
}

echo "=====================================================================<br>";

$notas = [10, 4, 8, 9, 5];
echo array_sum($nota) / count($notas);

echo "=====================================================================<br>";



?>
