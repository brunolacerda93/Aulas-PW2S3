<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Telefones</title>
</head>

<body>
<h1>Telefones Válidos!</h1>
<table>
  <thead>
  <tr>
    <th>Número</th>
    <th>Saída Esperada</th>
  </tr>
  </thead>

  <tbody>
  <?php
  function is_valid(string $telefone): bool {
    $size = strlen($telefone);

    if (($size < 10) or ($size) > 11)
      return false;

    if (($telefone[0] != '1') or $telefone[1] != '6')
      return false;

    if (($size == 11) and ($telefone[2] != '9'))
      return false;

    if (($size == 10) and ($telefone[2] != '3'))
      return false;

    for ($i = 3; $i < $size; $i++) {
      if (($telefone[$i] < '0') or ($telefone[$i] > '9'))
        return false;
    }
    return true;
  }

  $numbers = array("16988776655",
                   "15988776655",
                   "Abc123456",
                   "16 9 8197 9999",
                   "(16)912345678",
                   "1632611234",
                   "0",
                   "IFSP é legal",
                   "16876549876",
                   "1650986787",
                   "16923695293");

  for ($i = 0; $i < count($numbers); $i++) {
    echo "<tr><td>" . $numbers[$i] . "</td>";

    if (is_valid($numbers[$i]))
      echo "<td><p>Número Válido!</p></td>";
    else
      echo "<td><p>Número Inválido!</p></td>";

    echo "</tr>";
  }
  ?>
  </tbody>
</table>
</body>
</html>
