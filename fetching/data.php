<?php 

// //Declear Var
 
//   $host='localhost';
//  $username='root';
//  $password='';
//  $dbname='admin_system';
//  $port='4306';

// // // Set DSN 

// $dsn ='mysql:host='.$host.';port='.$port.';'.'dbname='.$dbname;

// // Create instance of PDO 

// $pdo = new PDO($dsn,$username,$password);

// //Statment

// $stmt=$pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
// $dd = json_encode($stmt);
// echo $stmt;



// $apiUrl = "https://api.github.com/users/%7B$username%7D";
// $apiUrl = "https://www.googleapis.com/youtube/v3/search?q={$searchQuery}&key={$apiKey}&maxResults=10";
// https://api.github.com/users/
// https://pokeapi.co/api/v2/pokemon/%7B$pokemonName%7D



try {
  $connection = new PDO("mysql:host=localhost;port=4306;dbname=admin_system", "root", "");
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "database error" . $e->getMessage();
}

$data = $connection->query('SELECT id, email as EMAIL from users')->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

echo json_encode($data);
?>