<?php 

// task 1
class displayString{
  function __construct(){
    echo 'MyClass class has initialized!';
  }
  // task 2
  function welcome($str){
    echo "Hello All, I am $str";
  }
  // task 3
  function factorial($n){
    if($n === 1)
      return 1;
    return $n * $this->factorial($n-1);
  }
  // task 4
  function sort($ar){
    sort($ar);
    return $ar;
  }
  // task 5
  function dif($date1,$date2){
    $dt1 = date($date1); 
    $dt2 = date($date2);
    return $dt1 - $dt2;
  }

};
$obj = new displayString();
echo $obj->dif('1981-11-03','2013-09-04');

// $obj->welcome("Scott");



