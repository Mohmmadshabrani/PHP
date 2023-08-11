<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script defer src="main.js"></script>
  <style> 
    body {
      color: #fff;
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
    .table{
      color: #fff;
      margin-top: 3rem;
      text-align: center;
      border: 1px solid #fff;
    }
    tr , td{
      border: 1px solid #fff;
    }
</style> 
</head>
<body>
  <form action="">
    <input type="text" id="name">
    <button class="btn">Search</button>
  </form>
  <div class="card">
    <div class="detiles"></div>
  </div>
</body>
</html>