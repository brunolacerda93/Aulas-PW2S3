<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bissexto</title>
</head>

<body>
  <h1>Anos Bissextos!</h1>
  <ul>
    <?php
    function is_bissexto(int $ano): bool {
      if (($ano % 400 == 0) and ($ano % 100 == 0))
        return true;

      if (($ano % 4 == 0) and ($ano % 100 != 0))
        return true;

      return false;
    }

    for ($i = 1582; $i <= 2100; $i++) {
      if (is_bissexto($i))
        echo "<li>" . $i . "</li>";
    }
    ?>
  </ul>
</body>
</html>
