

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  $name= $_GET["name"];
  $age= $_GET["age"];
  $mail= $_GET["mail"];

  if (strlen($name) < 3) {
      echo 'accesso negato';
  }
  elseif (!is_numeric($age)) {
    echo 'accesso negato';
  }
  elseif (!strpos($mail, '@') || !strpos($mail, '.')) {
      echo 'accesso negato';
  }
  else {
      echo 'accesso riuscito!';
  } 

?>
</body>
</html>