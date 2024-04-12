<?php

$lanches = ["Coxinha", "Hamburguer", "Empada", "Pastel", "Coxinha", ];
// Mostrar
foreach($lanches as $v){
    echo "$v <br>";
}
echo "=======================================================================<br>";

$imovel = [
    "tipo_imovel" => "Casa",
    "bairro" => "Crispim",
    "valor" => 3000000,
    "cidade" => "Pindamonhangaba",
    "tipo" => "Venda"
    
];

foreach($imovel as $v){
  echo "$v <br>";
}

echo "=======================================================================<br>";

$cadastro = [
    ["Id" => 999333,
    "Nome" => "Anne Rice",
    "Idade" => 3000000,
    "Salario" => 11000.0000,
    "Função" => "Escritora"
    
],
[
    "Id" => 999555,
    "Nome" => "Stephen King",
    "Idade" => 222222223,
    "Salario" => 11000.0000,
    "Função" => "Escritor"
],    
[       "Id" => 999222,
        "Nome" => "Kant",
        "Idade" => 30022222,
        "Salario" => 4400.0000,
        "Função" => "Escritor"
]

];    
    


  foreach($cadastro as $v){
echo $v ["Id"] . "<br>".
$v ["Nome"] . "<br>".
$v ["Idade"] . "<br>".
$v ["Salario"] . "<br>".
$v ["Função"] . "<br>" . "<br>";
  }


echo "=======================================================================<br>";

$cadastro = [
    "Id" => "999333",
    "Nome" => "Anne Rice",
    "Idade" => "3000000",
    "Salario" => 11000.0000,
    "Função" => "Escritora"
];
    foreach($cadastro as $k => $v){
        echo "$k: $v <br>";
      }
  echo "=======================================================================<br>";
echo "<h3>Explode<h3>";

      $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
      $pieces = explode(" ", $pizza);
      echo $pieces[0] . "<br>"; // piece1
      echo $pieces[1] . "<br>"; // piece2
 echo "=======================================================================<br>"; 
 echo "<h3>strlower - retorna tudo com letra minuscúla<h3>";
 $str = "Mary Had A Little Lamb and She LOVED It So";
 $str = strtolower($str);
 echo $str . "<br>"; // Prints mary had a little lamb and she loved it so

 echo "=======================================================================<br>"; 

 echo "<h3>strlen - Conta as letras e tbm espaços <h3>";

 $str = 'abcdef';
 echo strlen($str); // 6
 
 $str = ' ab cd ';
 echo strlen($str) . "<br>"; // 7

 echo "=======================================================================<br>";
 
 
 
 $email  = 'name@example.com';
 $domain = strstr($email, '@');
 echo $domain; // prints @example.com
 
 $user = strstr($email, '@', true);
 echo $user; // prints name
 
?>