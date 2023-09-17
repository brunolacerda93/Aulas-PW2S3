<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercício 02</title>
  <style>
    .form {
          width: 30%;
          display: flex;
          flex-direction: column;
          justify-content: space-around;
          align-items: stretch;
      }
      label{
          padding-top: 10px;
      }
      button {
          background-color: #00BFFF;
      }
  </style>
</head>

<body>
<h1>Exercício 02</h1>

<form class="form" method="POST" action="form-02.php">
  <label>Nome</label>
  <input type="text" placeholder="Digite seu nome" name="nome">

  <label>Idade</label>
  <input type="number" placeholder="Digite sua idade" name="idade">

  <label>E-mail</label>
  <input type="text" placeholder="Digite seu e-mail" name="email">

  <label>Estado civil</label>
  <select name="estado">
      <option value="">---</option>
      <option value="1">Solteiro</option>
      <option value="2">Casado</option>
      <option value="3">Viúvo</option>
  </select>


  <label>O que você gostaria de comer hoje?</label>
  <label>
      <input type="checkbox" name="comida[]" value="0"> Crazy Burger
  </label>
  <label>
      <input type="checkbox" name="comida[]" value="1"> Salad Burger
  </label>
  <label>
      <input type="checkbox" value="2" name="comida[]"> The Final Burger
  </label>
  <label>
      <input type="checkbox" value="3" name="comida[]"> Batatas Explozivas
  </label>
  <label>
      <input type="checkbox" value="4" name="comida[]"> BBC - batata, bacon, cheddar
  </label>
  <label>
      <input type="checkbox" value="5" name="comida[]"> Onion Rings
  </label>

  <label>Forma</label>
      <label>
          <input type="radio" name="forma" value="1">Entrega
      </label>
      <label>
          <input type="radio" name="forma" value="2">Buscar
      </label>

  <button>Finalizar pedido</button>
</form>
<?php

  include_once "form-validations.php";

  if ($_POST) {
    $nome   = nome_valido();
    $idade  = idade_valido();
    $email  = email_valido();
    $estado = estado_valido();
    $comida = comida_valido();
    $forma  = forma_valido();

    $success = "sucesso";

    validation_message($nome,   str_contains($nome,   $success));
    validation_message($idade,  str_contains($idade,  $success));
    validation_message($email,  str_contains($email,  $success));
    validation_message($estado, str_contains($estado, $success));
    validation_message($comida, str_contains($comida, $success));
    validation_message($forma,  str_contains($forma,  $success));
  }

?>

</body>
</html>
