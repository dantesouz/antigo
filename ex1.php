<?php

$nome= "dante";
$sobrenome= "souza";
// concatena = junta as variaveis
 //echo = print ou leia
echo $nome ." ". $sobrenome;
//<br> = quebra linha
echo "<h1>Olá $nome $sobrenome!<h1> <br>";
echo "<p>Bem vindo ao site!!</p>";

$a = 2;
$b = 5;
$c = 3;
echo "A soma é " . $a+$b+$c;
echo "<br>";
echo "A multiplicação é " . $a*$b*$c;
echo "<br>";
echo "A média é " . ($a+$b+$c)/3;
echo "<br>===================================================<br>";


echo "<br>===================================================<br>";

//Altura >= 1.80 -> Pode entrar
//Altura <= 1.20 -> tome biotonico


$altura = 1.60;

if($altura >= 1.80){
    echo  "pode entrar";
    
    } else if($altura <= 1.20){
            echo "tome mais biotonico";
            } else {
                echo "não pode entrar";
            }
  
            echo "<br>===================================================<br>"; 
  
$idade = 18;

if($idade >= 18){
    echo "Maior de idade";

}else {
    echo "Não é maior de idade";
}


echo "<br>===================================================<br>";



$idade = 30;
$saldo = 20;

if($idade >= 30 and $saldo >= 200){
echo "aprovado";
}else{
    echo"Tente outra vez";
}
echo "<br>========================================================<br>";
$peso = 120;
$altura = 1.80;
$imc = $peso / ($altura * $altura);

if($imc < 18.5){
    echo "abaixo do peso";
}else if($imc < 24.9){
    echo "peso normal";
}else{
    echo "sobrepeso";
}



//echo ($imc < 185.5 ? "abaixo do peso" : $imc < 24.9 ? "peso normal" : "acima"

echo "<br>========================================================<br>";
echo "<h3>Laço de repetição<br><h3>";

for($i = 0; $i<10; $i++){
    echo "O valor de i é $i <br>";
}
echo "<br>========================================================<br>";
for($i = 10; $i>0; $i--){
    echo "O valor de i é $i <br>";
}
echo "<br>========================================================<br>";

for($i = 0; $i<=10; $i+=2){
    echo "O valor de i é $i <br>";
}

echo "<br>========================================================<br>";

for($i = 20; $i<=50; $i++){
   
    echo "O valor de i é $i <br>";
}
echo "<br>========================================================<br>";
for($i = 50; $i>=20; $i--){
    echo "O valor de i é $i <br>";
}
echo "<br>========================================================<br>";
for($i = 5; $i<=50; $i+=5){
    echo "O valor de i é $i <br>";
}
echo "<br>========================================================<br>";

for($i = 1; $i<=10; $i++){
    echo "$i x 5 = " . $i*5 . "<br>";
}
echo "<br>========================================================<br>";

for($i = 1; $i <= 100; $i++){
    if ($i % 2==0){
echo "É par $i<br>"; // echo $i%2==0 ? "$i<br>" : "";
    }
}
//if($i = "a"; $i<="z";$i++)


?>