<?php

function exists(string $name): bool {
  if (isset($_POST[$name]) and !empty($_POST[$name])) {
    return true;
  }
  return false;
}

function nome_valido(): string {
  if (!exists("nome")) {
    return "Nome vazio!!!";
  }

  $nome = trim($_POST["nome"]);

  if (strlen($nome) < 5 or strlen($nome) > 10) {
    return "Nome Inválido...";
  }

  return "Nome preenchido com sucesso!";
}

function idade_valido(): string {
  if (!exists("idade")) {
    return "Idade vazia!!!";
  }

  $idade = $_POST["idade"];

  if ($idade < 18 or $idade > 60) {
    return "Idade Inválida...";
  }

  return "Idade preenchida com sucesso!";
}

function email_valido(): string {
  if (!exists("email")) {
    return "E-mail vazio";
  }

  $email = trim($_POST["email"]);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "E-mail Inválido...";
  }

  return "E-mail preenchido com sucesso!";
}

function estado_valido(): string {
  if (!exists("estado")) {
    return "Estado Civil vazio";
  }

  $estado_civil = $_POST["estado"];

  if ($estado_civil < 0 or $estado_civil > 2) {
    return "Inválido...";
  }

  return "Estado Civil preenchido com sucesso!";
}

function comida_valido(): string {
  if (!exists("comida")) {
    return "Comida vazio";
  }

  $comida = $_POST["comida"];

  if (count($comida) != 3) {
    return "Inválido...";
  }

  for ($i = 0; $i < 3; $i++) {
    if ($comida[$i] < 0 or $comida[$i] > 5) {
      return "Inválido...";
    }
  }

  return "Comida preenchido com sucesso!";
}

function forma_valido(): string {
  if (!exists("forma")) {
    return "Forma vazio";
  }

  $forma = $_POST["forma"];

  if ($forma != 0 and $forma != 1) {
    return "Forma Inválido...";
  }

  return "Forma preenchido com sucesso!";
}

function validation_message($mensagem, $flag): void {
  if ($flag) {
    echo "
            <div class=\"container sucess\">
                <p class=\"title\">Sucesso!</p>
                <p class=\"descricao\">" . $mensagem . "</p>
            </div>";
  }
  else {
    echo "
            <div class=\"container erro\">
                <p class=\"title\">Erro!</p>
                <p class=\"descricao\">$mensagem</p>
            </div>";
  }
}

?>