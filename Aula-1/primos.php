<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Primos</title>
</head>

<body>
  <h1>Números Primos!</h1>
  <table>
    <thead>
    <tr>
      <th>Posição</th>
      <th>Número</th>
    </tr>
    </thead>

    <tbody>
      <?php
      function is_prime(int $number): bool {
        for ($i = 2; $i <= $number/2; $i++) {
          if ($number % $i == 0) {
            return false;
          }
        }
        return true;
      }

      $pos = 1;

      for ($i = 2; $i < 100; $i++) {
        if (is_prime($i)) {
          echo "<tr><td>" . $pos++ . "</td><td>" . $i . "</td></tr>";
        }
      }
      ?>
    </tbody>
  </table>
</body>
</html>
