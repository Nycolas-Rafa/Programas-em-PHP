<?php
//um programa que imprima os múltiplos de 5, no intervalo de 1 até 500.

for ($i = 1; $i <= 500; $i++) {
    if ($i % 5 == 0) {
      echo "Os multiplos de 5 são: " . $i;
      echo '<br>';
    }
  }
?>
