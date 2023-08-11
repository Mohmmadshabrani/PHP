<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

  </style>
</head>

<body>
  <?php

  try {
    $pdo = new PDO("mysql:host=localhost;port=4306;dbname=testdb", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "faild" . $e->getMessage();
  }

  echo "connection was established successfully";
  ?>
</body>

</html>