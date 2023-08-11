<?php
include_once "connection.php";
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $stmt = $connection->exec("DELETE FROM users WHERE id = $id");
  if ($stmt){
    http_response_code(200);
    echo 'success';
  }
  else
    http_response_code(500);
}
header('Location: view.php');
