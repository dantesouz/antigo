<?php
require_once('Veiculo.class.php');
// Inicializa o Objeto Veiculo
$veiculo = new Veiculo("Ferrari", "812 GTS", 2020, "Azul", 8000.00);

//Método para exibir Informações
echo "Informações do Veículo:<br>";
$veiculo->MostrarDados();

//Calcula e exibe Idade Veiculo
echo "<br>Idade do Veículo: " . $veiculo->calcularIdade() . "anos<br>";

//Calcula e exibe depreciação do Veículo
echo "Valor depreciado do Veículo: R$ " . number_format($veiculo->CalcularDepreciacao(), 2, ',', ',') . "<br>";

//Verifica se o Veículo é novo
if($veiculo->ehnovo()){
    echo "O Veículo é novo.<br>";
}else{
    echo "Manda pro ferro velho.<br>";
}
//Altera a cor do Veiculo
$veiculo->pintarVeiculo("Preto");
echo "<br>Após pintura:<br>";
$veiculo->MostrarDados();

?>