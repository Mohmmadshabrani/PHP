<?php

echo '<pre>';
// task 1
for ($i = 1; $i <= 10; $i++) {
  if ($i !== 1) {
    echo '-';
  }
  echo $i;
}
echo '<br>';


// task 2

$sum = 0;
for ($i = 0; $i < 30; $i++) {
  $sum += $i;
}
echo "sum  = $sum<br><br>";

// task 3 
$result = '';
for ($i = 0; $i < 5; $i++) {
  //SPACES
  for ($j = 0; $j < 5 - $i; $j++) {
    $result .= " " . chr(65) . " ";
  }
  for ($j = 0; $j < $i; $j++) {
    $result .= " " . chr(65 + $i) . " ";
  }
  $result .= "<br>";
}
echo $result;
echo "<hr>";

// task 4

$result = '';
for ($i = 0; $i < 5; $i++) {
  //SPACES
  for ($j = 0; $j < 5 - $i; $j++) {
    $result .= " 1 ";
  }
  for ($j = 0; $j < $i; $j++) {
    $result .= " " . ($i + 1) . " ";
  }
  $result .= "<br>";
}

echo $result;
echo "<hr>";


// task 5

$result = "";
for ($i = 0; $i < 5; $i++) {
  for ($j = 0; $j < 5; $j++) {
    if ($j == $i)
      $result .= " $i ";
    else
      $result .= " 0 ";
  }
  $result .= "\n<br>";
}
echo $result;


// task 6
function fac($n)
{
  if ($n == 1)
    return $n;
  return $n * fac($n - 1);
}
echo "<hr>";

echo "factorial of 5 :" . fac(5);

echo "<hr>";

// task 7 i think?
function fib($n)
{
  $x = 0;
  $y = 1;
  echo $x . " , ";
  echo $y . " , ";

  for ($i = 0; $i < $n; $i++) {
    $temp = $x;
    $x = $y;
    $y += $temp;
    echo $y;
    if ($i !== $n - 1)
      echo " , ";
  }
}
fib(15);
echo "<hr>";

// task 8
$str = 'Orange Coding Academy';
echo substr_count(strtolower($str), 'c');
echo '</pre>';

// task 9
echo '<table border = 2>';
for ($i = 0; $i < 5; $i++) {
  echo '<tr>';
  for ($j = 0; $j < 6; $j++) {
    echo "<td>";
    echo "$j × $i = " . $j * $i;
    echo "</td>";
  }
  echo '</tr>';
}
echo '</table>';

echo "<hr>";

// task 10
for ($i = 1; $i < 50; $i++) {
  if ($i % 3 == 0)
    echo 'Fizz';
  if ($i % 5 == 0)
    echo "Buzz";
  if ($i % 3 !== 0 && $i % 5 !== 0)
    echo $i;
  echo " ";
}

echo "<hr>";
// task 11
function floyedTriangle($n)
{
  $num = 1;
  for ($i = 1; $i <= $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
      echo $num++ . " ";
    }
    echo '<br>';
  }
}
floyedTriangle(5);
echo "<hr>";

// tas 12

$result = ' ';
$n = 9;
$spaces = "&#160&#160";
for ($i = 1; $i <= 9; $i++) {
  $cond1fr = ceil($n / 2) - $i;
  $cond2 = $i;
  if ($i >= 5) {
    $cond1fr = $i - ceil($n / 2);
    $cond2 = 10 - $i;
  }
  //spaces 
  for ($j = 0; $j < $cond1fr; $j++) {
    $result .= $spaces;
  }
  for ($j = 0; $j < $cond2; $j++) {
    $result .= chr(65 + $j) . "&#160";
  }
  $result .= "<br>";
}
echo $result;
echo "<hr>";



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    td,
    tr {
      padding: 10px;
    }

    table,
    td,
    tr {
      border-spacing: 0px;
    }
  </style>
</head>

<body>

</body>

</html>