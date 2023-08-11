<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #292929;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    form {
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    input {
      background-color: #3b3b3b;
      color: #fff;
      height: 3rem;
      width: 12rem;
      border-style: none;
      border-radius: 10px;
    }

    ::placeholder {
      color: white;
      text-align: center;
    }
    table{
      color: #fff;
      margin-top: 3rem;
      text-align: center;
      border: 1px solid #fff;
    }
    tr , td{
      border: 1px solid #fff;
    }
  </style>
  <script defer src="main.js"></script>
</head>
<?php include_once 'create.php'?>
<body>
  <form action="create.php" method="post">
    <input type="text" name="email" placeholder="email" required>
    <input type="password" name="password" placeholder="password" required>
    <button name ='submit'>Submit</button>
  </form>

  <?php print_r(\loadData())?>
</body>

</html>