
  <?php
  // php version
  echo '' . phpversion();

  //  strings
  echo "Tomorrow I 'll learn PHP global variables.<br>";
  echo "This is a bad command: del c:. <br>";

  // form name
  if (isset($_POST["name"])) {
    echo $_POST["name"];
    echo '<br>';
  }

  // ip
  echo 'User IP Address - ' . $_SERVER['REMOTE_ADDR'] . '<br>';

  // current file
  echo 'current file: ' . $_SERVER['SCRIPT_NAME']

  // 

  ?>

<?php
echo '<br><br><br><br>';
$url = 'https://www.w3schools.com/php/default.asp';

$parsedUrl = parse_url($url);
echo "Scheme: " . $parsedUrl['scheme'] . "<br>";
echo "Host: " . $parsedUrl['host'] . "<br>";
echo "Path: " . $parsedUrl['path'] . "<br>";
?>

<?php
echo '<span style = "color: red">P</span>HP Tutorial.'
?>


<?php
header('Location: https://www.w3schools.com/');
?>