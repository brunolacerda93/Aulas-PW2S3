<?php

function exists(string $name): bool {
  if (isset($_POST[$name]) and !empty($_POST[$name])) {
    return true;
  }
  return false;
}

if (exists("nome")) {
  $nome = trim($_POST["nome"]);

  if (strlen($nome) < 5 or strlen($nome) > 10) {
    echo "Nome Inválido...";
  }
}

if (exists("idade")) {
  $idade = $_POST["idade"];

  if ($idade < 18 or $idade > 60) {
    echo "Idade Inválida...";
  }
}

if (exists("email")) {
  $email = trim($_POST["email"]);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail Inválido...";
  }
}

if (exists("estado")) {
  $estado_civil = $_POST["estado"];

  if ($estado_civil < 0 or $estado_civil > 2) {
    echo "Inválido...";
  }
}

if (exists("comida")) {
  $comida = $_POST["comida"];

  if (count($comida) == 3) {
    for ($i = 0; $i < 3; $i++) {
      if ($comida[$i] < 0 or $comida[$i] > 5) {
        echo "Inválido...";
        break;
      }
    }
  }
}

?>