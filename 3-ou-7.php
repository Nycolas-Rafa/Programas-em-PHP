<?php
// um programa PHP que leia um número e informe se ele é divisível por 3 e por 7.

$numero = intval(readline("Digite um número: "));
if ($numero % 3 == 0 && $numero % 7 == 0) {
        echo "O número é divisível por 3 e por 7\n";
  } else {
        echo "O número não é divisível por 3 e por 7\n";
  }
?>
