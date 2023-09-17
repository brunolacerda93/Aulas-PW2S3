<?php

function exists(string $name): bool {
  if (isset($_POST[$name]) and !empty($_POST[$name])) {
    return true;
  }
  return false;
}

function nome_valido(): string {
  if (!exists("nome")) {
    return "Campo Nome vazio";
  }

  $nome = trim($_POST["nome"]);

  if (strlen($nome) < 5 or strlen($nome) > 10) {
    return "Nome Inválido...";
  }

  return "Campo Nome preenchido com sucesso!";
}

function idade_valido(): string {
  if (!exists("idade")) {
    return "Campo Idade vazio";
  }

  $idade = $_POST["idade"];

  if ($idade < 18 or $idade > 60) {
    return "Idade Inválida...";
  }

  return "Campo Idade preenchido com sucesso!";
}

function email_valido(): string {
  if (!exists("email")) {
    return "Campo E-mail vazio";
  }

  $email = trim($_POST["email"]);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "E-mail Inválido...";
  }

  return "Campo E-mail preenchido com sucesso!";
}

function estado_valido(): string {
  if (!exists("estado")) {
    return "Campo Estado Civil vazio";
  }

  $estado_civil = $_POST["estado"];

  if ($estado_civil < 0 or $estado_civil > 3) {
    return "Estado Civil Inválido...";
  }

  return "Campo Estado Civil preenchido com sucesso!";
}

function comida_valido(): string {
  if (!exists("comida")) {
    return "Campo Comida vazio";
  }

  $comida = $_POST["comida"];

  if (count($comida) != 3) {
    return "É preciso selecionar 3 (três) itens!!!";
  }

  for ($i = 0; $i < 3; $i++) {
    if ($comida[$i] < 0 or $comida[$i] > 5) {
      return "Comida Selecionada Inválida...";
    }
  }

  return "Campo Comida preenchido com sucesso!";
}

function forma_valido(): string {
  if (!exists("forma")) {
    return "Campo Forma vazio";
  }

  $forma = $_POST["forma"];

  if ($forma != 1 and $forma != 2) {
    return "Forma Inválida...";
  }

  return "Campo Forma preenchido com sucesso!";
}

function validation_message(string $mensagem, bool $flag): void {
  if ($flag) {
    echo "
            <div class=\"container sucess\">
                <p class=\"title\">Sucesso!</p>
                <p class=\"descricao\">$mensagem</p>
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