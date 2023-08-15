<?php
//um programa PHP que leia dois valores inteiros e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentado somando-se a ele mais 8, caso o valor somado seja menor ou igual a 20, este deverá ser apresentado
subtraindo-se 5.

$valor1 = intval(readline("Digite o primeiro valor: "));
$valor2 = intval(readline("Digite o segundo valor: "));
$soma = $valor1 + $valor2;
if ($soma > 20) {
    $soma = $soma + 8;
  } else {
        $soma = $soma - 5;
}
echo "O resultado é: " . $soma;
echo '<br>';
?>
