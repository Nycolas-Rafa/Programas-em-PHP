<?php
// um programa PHP que leia dois valores numéricos inteiros e efetue a adição, caso o resultado seja maior que 10, apresentá-lo.

$multiplicando = intval(readline("Digite o multiplicando: "));
$multiplicador = intval(readline("Digite o multiplicador: "));
$produto = 0;
for ($i = 1; $i <= $multiplicador; $i++) {
    $produto += $multiplicando;
}
echo "O produto é: " . $produto;
echo '<br>';
?>
