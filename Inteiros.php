<?php
//calcule o produto de dois números inteiros.

$multiplicando = intval(readline("Digite o multiplicando: "));
$multiplicador = intval(readline("Digite o multiplicador: "));
$produto = 0;
for ($i = 1; $i <= $multiplicador; $i++) {
  $produto += $multiplicando;
}
echo "O produto é: " . $produto;
echo '<br>';
?>
