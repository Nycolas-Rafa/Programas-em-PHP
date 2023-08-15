<?php
//um programa em PHP que permita entrar com o nome, a idade e o sexo de 20 pessoas.

for ($i = 1; $i <= 20; $i++) {
    echo "Pessoa " . $i;
    $nome = readline("Digite o nome: ");
    $idade = intval(readline("Digite a idade: "));
    $sexo = readline("Digite o sexo (Masculino/Feminino): ");
    if ($sexo == "Masculino" && $idade > 21) {
      echo $nome;
      echo '<br>';
    }
  }
?>
