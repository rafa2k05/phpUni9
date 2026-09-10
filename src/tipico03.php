<?php
$nome = "Claudete";
$sobrenome = 'Maria';
echo $nome . " " . $sobrenome . "<br>";
echo "$nome $sobrenome<br>";

$cor = "brown";
echo "<p style='color:$cor'>$nome $sobrenome</p>";

$primeirovalor = "5124";
$segundovalor = "0.984";

echo "Primeiro valor: $primeirovalor<br>";
echo "Segundo valor: $segundovalor<br>";

echo "<br>";

$nova_primeiranota = (int)$primeirovalor;
$nova_segundanota = (int)$segundovalor;

echo "Primeiro valor para inteiro: $nova_primeiranota<br>";
echo "Segundo valor para inteiro: $nova_segundanota<br>";

echo "<br>";

$valor = $primeirovalor + $segundovalor;
echo "Soma dos valores: $valor<br>";

$inteiro=(int)$valor;
$decimal=$valor-$inteiro;

echo "Valor inteiro: $inteiro<br>";


?>