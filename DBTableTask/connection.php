<?php
// declare(strict_types=1);
try{
  $connection = new PDO("mysql:host=localhost;port=4306;dbname=admin_system", "root", "");
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "database error".$e->getMessage();
};

class registerUser
{
  public function __construct(private string $email, private string $password)
  {
    $this->appendDB();
  }
  public function appendDB()
  {
    global $connection;
    $connection->exec('CREATE TABLE IF NOT EXISTS Users(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,email varchar(255),password varchar(32))');

    $stmt = $connection->prepare("INSERT INTO Users(email, password) VALUES (:email, :password)");
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':password', $this->password);
    
    $stmt->execute();
    $connection = null;
    header("Location: view.php");
  }
}
function getData(){
  global $connection;
  $data = $connection->query('SELECT id , email as EMAIL, password as PASSWORD from Users');
  $data = $data->fetchAll();
  $result ='<table> <tr>
  <th>ID</th>
  <th>Email</th>
  <th>Password</th>
  <th>Edit</th>
  <th>Delete</th>
  </tr>';
  foreach($data as $row){
    $result .= "<tr data-id='$row[0]'>
      <td> $row[0] </td>
      <td> $row[1] </td>
      <td> $row[2] </td>
      <td> E </td>
      <td><button class='delete-btn'>X</button></td>
    </tr>";
  }
  $result .= "</table>";
  return $result;
}
// require "create.php";
?>