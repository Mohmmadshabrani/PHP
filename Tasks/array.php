<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Q1</p>
  <?php
  $colors  = ["red", "green", "white"];
  echo "The memory of  that scene for me is like a frame of film forever frozen at that moment: the $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
  echo "<hr>";
  ?>
  <p>Q2</p>
  <?php $colors = array('white', 'green', 'red'); ?>
  <ul>
    <?php foreach ($colors as $color) : ?>
      <li><?php echo $color; ?></li>
    <?php endforeach; ?>
  </ul>
  <?php
  echo "<hr>";
  ?>
  <p>Q3</p>
  <?php
  $cities = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
  );
  asort($cities);
  foreach ($cities as $key => $value) {
    echo "The capital of " . $key . " is " . $value . "<br>";
  }
  echo "<hr>";

  echo '<p>Q4</p>';

  $color = array(4 => 'white', 6 => 'green', 11 => 'red');
  echo reset($color);
  echo "<hr>";

  echo '<p>Q5</p>';
  // Write a PHP script that inserts a specific new item in an array in any position.
  // Sample Input:

  $arr = [1, 2, 3, 4, 5];
  $new_item = '$';
  $location = [4];
  array_splice($arr, 3, 0, $new_item);
  print_r($arr);
  echo "<br>";
  echo implode(' ', $arr);
  echo "<hr>";

  echo '<p>Q6</p>';

  //Write a PHP script to sort the following associative array depending on the key value [asc] : 

  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
  asort($fruits);
  foreach ($fruits as $key => $value) {
    echo "$key = $value <br>";
  }

  echo "<hr>";

  echo '<p>Q7</p>';

  $a1 = array(
    78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
    76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
    74, 62, 62, 65, 64, 68, 73, 75, 79, 73
  );
  $a2 = count($a1);
  $sum = array_sum($a1);
  $Average = $sum / $a2;
  echo "Average Temperature is: $Average <br>";

  $sorted_a1 = $a1;
  sort($sorted_a1);
  $lowest_a1 = array();
  $i = 0;
  foreach ($sorted_a1 as $a1) {
    $lowest_a1[] = $a1;
    $i++;
    if ($i === 5) {
      break;
    }
  }
  $highest_a1 = array();
  $i = 0;
  foreach (array_reverse($sorted_a1) as $a1) {
    $highest_a1[] = $a1;
    $i++;
    if ($i === 5) {
      break;
    }
  }

  echo "<br>";
  echo "Average Temperature is: " . number_format($Average, 1) . "<br>";
  echo "List of five lowest temperatures: " . implode(', ', $lowest_a1) . "<br>";
  echo "List of five highest temperatures: " . implode(', ', $highest_a1) . "<br>";
  echo "<hr>";
  echo '<p>Q8</p>';
  //Write a PHP program to merge the following two arrays. 
  $arr1 = array("color" => "red", 2, 4);
  $arr2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
  $newArr = array_merge($arr1, $arr2);
  print_r($newArr);

  echo "<hr>";

  echo '<p>Q9</p>';

  // Write a PHP function to change the following array's and convert all the strings to upper case.
  function UpperCase($array)
  {
    return array_map('strtoupper', $array);
  }
  $colors = array("red", "blue", "white", "yellow");
  $upperCaseColors = UpperCase($colors);
  print_r($upperCaseColors);
  echo "<hr>";

  echo '<p>Q10</p>';

  // 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 
  function Lowercase($array)
  {
    return array_map('strtolower', $array);
  }
  $colors = array("RED", "BLUE", "WHITE", "YELLOW");
  $lowercaseColors =  Lowercase($colors);
  print_r($lowercaseColors);

  echo "<hr>";
  echo '<p>Q11</p>';

  // 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
  $divisibleNumbers = array();
  for ($number = 200; $number <= 250; $number++) {
    if ($number % 4 === 0) {
      $divisibleNumbers[] = $number;
    }
  }
  echo implode(',', $divisibleNumbers);
  echo "<hr>";
  echo '<p>Q13</p>';

  // Write a PHP script to get the shortest/longest string length from an array. 
  $a1 = array("abcd", "abc", "de", "hjjj", "g", "wer");
  $shortestLength = PHP_INT_MAX;
  $longestLength = 0;
  foreach ($a1 as $word) {
    $length = strlen($word);
    if ($length < $shortestLength) {
      $shortestLength = $length;
    }
    if ($length > $longestLength) {
      $longestLength = $length;
    }
  }
  echo "The shortest array length is $shortestLength. The longest array length is $longestLength.";

  echo "<hr>";
  echo '<p>Q14</p>';
  function generateUniqueRandomNumbers($min, $max, $count)
  {
    $allNumbers = range($min, $max);
    shuffle($allNumbers);
    $randomNumbers = array_slice($allNumbers, 0, $count);
    return $randomNumbers;
  }
  $randomNumbers = generateUniqueRandomNumbers(11, 20, 10);
  echo implode(' ', $randomNumbers);

  echo "<hr>";
  echo '<p>Q15</p>';
  $array1 = array(2, 0, 10, 12, 6);
  $lowestInteger = null;
  foreach ($array1 as $num) {
    if ($num !== 0 && ($lowestInteger === null || $num < $lowestInteger)) {
      $lowestInteger = $num;
    }
  }
  echo $lowestInteger;
  echo "<hr>";
  ?>
</body>
</html>