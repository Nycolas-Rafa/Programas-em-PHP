<?php
//um programa que leia um número e informe se ele é ou não divisível por 5

$numero = intval(readline("Digite um número: "));
if ($numero % 5 == 0) {
    echo "O número é divisível por 5\n";
} else {
    echo "O número não é divisível por 5\n";
}
?>
