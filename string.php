<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <pre>
  <?php
  $name  = $_POST['name'];
  echo 'to lower: ' . strtolower($name) . '<br>';

  $name  = $_POST['name'];
  echo 'to upper: ' . strtoupper($name) . '<br>';

  $name  = $_POST['name'];
  echo 'first letter to upper: ' . strtoupper($name[0]) . substr($name, 1) . '<br>';

  $name  = $_POST['name'];
  echo 'first of each word to upper: ' . ucwords($name) . '<br>';
  ?>
  <form action="home.php" method ='post'>
    <input type="text" name='name'>
    <button>Submit</button>
  </form>
  <br>
  <hr>
  <br>
  <form action="home.php" method ='post'>
    <input type="text" name='date'>
    <button>Submit</button>
  </form>
  <br>
  <hr>
  <br>
  <form action="home.php" method ='post'>
    <label>Sentance</label>
    <input type="text" name='findWord'>
    <label>word to look for</label>
    <input type="text" name='wordtofind'>
    <button>Submit</button>
  </form>
  <?php
  // find a word sentence in a word  --- task 3
  $str  = $_POST['findWord'];
  $look  = $_POST['wordtofind'];
  if (strpos($str, $look) !== false) {
    echo 'Word Found!';
  } else {
    echo 'Word not Found :(';
  }
  ?>

  <?php
  // get the file name from url  --- task 4
  echo '<br><br><br><br>';
  echo 'url https://www.w3schools.com/php/default.asp<br><br>';
  $url = 'https://www.w3schools.com/php/default.asp';
  $parsedUrl = parse_url($url);
  echo "Path: " . basename($url) . "<br>";


  // get username from email  --- task 5
  echo 'email: info@gmail.com <br>';
  $email = 'info@gmail.com';
  $username = strstr($email, '@', true);
  echo 'username: ' . $username;

  // last three characters from the string
  echo 'email: info@gmail.com <br>';
  $email = 'info@gmail.com';
  $Doamin =  substr($email, -3);
  echo 'Last three characters: ' . $Doamin;

  // random password generitor 
  echo '<br>';

  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  $password =  substr(str_shuffle($data), 0, 16);

  echo $password;

  // // task 8   -- 8.	Write a PHP script to replace the first word of the sentence with another word.
  $sentence = 'That new trainee is so genius(says him)';
  $newWord = 'our';
  $a = explode(' ', $sentence);
  $a[0] = $newWord;
  $a = implode(' ', $a);
  var_dump($a);


  //task 9 Write a PHP script to find the first character that is different between two strings.

  function strdiff($str1, $str2)
  {
    if (strcmp($str1, $str2)) {
      $str1 = str_split($str1);
      $str2 = str_split($str2);
      for ($i = 0; $i < count($str1); $i++) {
        if ($str1[$i] !== $str2[$i])
          return "First difference between two strings at position $i: $str1[$i] vs $str2[$i]";
      }
    }
    return 'no diffrence was found!';
  }
  $str1 = 'dragonball';
  $str2 = 'dragonboll';
  $result = strdiff($str1, $str2);
  // echo "str1: $str1<br>str2: $str2<br>$result";




  // task 10 Write a PHP script to put a string in an array, use the (var_dump) to view the array.
  $str = 'Twinkle, twinkle, little star.';
  $ar = explode(',', $str);
  echo '<br>';
  // var_dump($ar);
  echo "<hr>";

  // task 11 Write a PHP script to print the next letter of the inputted letter. 
  $letter = 'z';
  $n = ord($letter) + 1;
  // echo chr($n > 122?97:($n > 90 && $n < 97? 65 : $n ) );
  echo "<hr>";


  //task 12	Write a PHP script to insert a string at the specified position in a given string. 
  echo "<hr>";

  function flattenArray($array)
  {
    $result = [];
    foreach ($array as $item) {
      if (is_array($item)) {
        $result = array_merge($result, flattenArray($item));
      } else {
        $result[] = $item;
      }
    }
    return $result;
  }
  function insertAt($ar, $indexPos, $value)
  {
    if ($indexPos >= count($ar)) {
      array_push($ar, $value);
      return $ar;
    }
    $ar[$indexPos] = [$value, $ar[$indexPos]];
    return flattenArray($ar);
  }
  $ar = [1, 2, 4, 5, 6, 7];
  // print_r(insertAt($ar ,0, 100));

  echo "<hr>";

  // task 12.	Write a PHP script to insert a string at the specified position in a given string. 
  function replaceAt($str, $pos, $newStr)
  {
    $newStr .= ' ';
    $str = str_split($str);
    array_splice($str, $pos, 0, $newStr);
    return implode('', $str);
  }
  $str = 'The brown fox';
  $newWord = 'quick';
  echo "Original String: $str" . '<br>';
  echo "the word to be inserted : $newWord" . '<br>';
  $result = replaceAt($str, 4, $newWord);
  echo "result: $result" . '<br>';
  echo "<hr>";

  // task 13.	Write a PHP script to remove zeroes from the given number.
  $num = 0000657022.24;
  $num = (string)$num;
  $num = str_replace('0', '', $num);
  echo (float) $num;


  echo "<hr>";

  //task 14
  $str = 'The quick brown fox jumps over the lazy dog';
  $part_to_be_removed = 'fox ';
  echo str_replace($part_to_be_removed, "", $str) . "<br>";
  echo "<hr>";

  //task 15
  $str = 'The quick brown fox jumps over the lazy dog---';
  echo str_replace('-', "", $str) . "<br>";

  echo "<hr>";
  //task 16
  $str = '\"\1+2/3*2:2-3/4*3';
  echo preg_replace('/\D/', " ", $str);
  echo "<hr>";

  // task 17
  $str =  'The quick brown fox jumps over the lazy dog';
  $words = str_word_count($str, 1);
  for ($i = 0; $i < 5; $i++)
    echo " $words[$i] ";
  echo "<hr>";

// task 18 
  echo (float)str_replace(',',"",'2,543.12')."<br>";
  echo "<hr>";

// task 19
for($i = 0 ; $i < 26; $i++)
  echo chr(97 +$i)." ";
echo "<br>";


  ?>





  </pre>

</body>

</html>