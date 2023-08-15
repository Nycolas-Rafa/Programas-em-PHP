<?php
//um programa que imprima todos os números pares de 100 até 1.

for ($i = 100; $i >= 1; $i--) {
    if ($i % 2 == 0) {
      echo "Os número pares de 100 a 1 são: " . $i;
      echo '<br>';
    }
  }
?>
