<?php

// task 1
function isPrime($n){
  for($i = 2 , $l = sqrt($n); $i <= $l ;$i++)
    if($n % $i == 0)
      return  "Not a prime";
  return "Its a prime";
}
echo isPrime(3);


// task 2
function reverse($str){
  $newStr = '';
  $ln = strlen($str);
  for($i = 1; $i <= $ln ;$i++)
    $newStr[$i] = $str[$ln - $i];
  return $newStr;
}

echo reverse('mohmmad');

 echo ord(' ');

// task 3
function isLower($str){
  for($i = 0 ; $i < strlen($str) ; $i++)
  if(ord($str[$i]) <= 90 && ord($str[$i] >= 65))
      return "not all lower cased string";
  return "yes its all lower cased";
}

echo isLower("is this all Lower cased");

// task 4
function swap(&$x,&$y){
  
}

echo "dsadssadasczxcsdsesda";