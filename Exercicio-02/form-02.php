<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Exercício 02</title>
</head>

<body>
<h1>Exercício 02</h1>
<?php
  include_once "form-validations.php";
  $nome   = nome_valido();
  $idade  = idade_valido();
  $email  = email_valido();
  $estado = estado_valido();
  $comida = comida_valido();
  $forma  = forma_valido();
?>
</body>
</html>
