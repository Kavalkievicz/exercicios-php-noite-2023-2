<?php
include '../16-01/Classe.php';

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];
$valor3 = $_GET["num3"];
echo "O primeiro valor é igual à: " . $valor1 . "<br>";
echo "O segundo valor é igual à: " . $valor2 . "<br>";
echo "O terceiro valor é igual à: " . $valor3 . "<br>";

echo "A soma é: " . Classe::somar($valor1, $valor2, $valor3) . "<br>";

$media = Classe::media($valor1, $valor2, $valor3);

echo "A média é: " . $media;
?>