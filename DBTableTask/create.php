<?php
include_once "connection.php"; 
$regUser = NULL;
if(isset($_POST['submit'])){
  $regUser = new registerUser($_POST['email'] , $_POST['password']);
  $regUser->appendDB();
}
function loadData(){
  return getData();
}
