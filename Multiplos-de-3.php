<?php
//um programa que leia um número e imprima uma das duas mensagens: "É múltiplo de 3"ou "Não é múltiplo de 3".

$numero = intval(readline("Digite um número: "));
if ($numero % 3 == 0) {
    echo "É múltiplo de 3\n";
  } else {
        echo "Não é múltiplo de 3\n";
}
?>
