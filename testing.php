<?php
echo '<pre>';
class Student{
  private $name;
  private $age;

  public function __construct($name = 'user', $age = 18)
  {
    $this->setName($name);
    $this->setAge($age);
    echo 'constructor was callled <br>';
  }

  public function setName(string $name)
  {
    if (strlen($name) > 0)
      $this->name = $name;
    else
      echo 'Name invalid';
  }

  public function setAge(int $age)
  {
    if ($age > 0 && $age < 100)
      $this->age = $age;
  }

  public function getAge()
  {
    return $this->age;
  }
  public function getName()
  {
    return $this->name;
  }
  public function print()
  {
    echo "Student name:$this->name <br> Age: $this->age<br>";
  }
}


class InternationalStudent extends Student
{
  private $HourRate;

  function __construct($name, $age, $hrRate)
  {
    parent::__construct($name, $age);
    $this->setHourRate($hrRate);
  }
  function setHourRate($price){
    if ($price > 0)
      $this->HourRate = $price;
    else
      echo "invalid price<br>";
  }
  public function print()
  {
    $name = $this->getName();
    $age = $this->getAge();
    echo "Student name:<br> Age: $age<br> Hour Rate: $this->HourRate";
  }
}
// creates an instence of calss student
$std1 = new Student('mohmmad' , 18);
// creates an instence of calss International Student

$std2 = new InternationalStudent('ahmed' , 18, 100);


// a function that checks if a method exist in a calss and it takes 2 parameters the first is either an instence of the class (a varibale) or the name of the calss in a string   return true or false 1 or 0
echo method_exists('Student' ,'getName')?"method is present": 'not found';
echo '<br>';
echo '<br>';

// a function that check if a  property exist in a class it almmost the same parameeters as the prevous function but instade of a method name it takes the propty name return true or false 1 or 0
echo property_exists('Student' , 'gpa')?"gpa is present": 'not found';
echo '<br>';
echo '<br>';


// a function that check if a given class is a subclass of another class it takes 2 parameters the first one can be either an instence of a class or the class name and the other one is the class name return true or false 1 or 0 
echo is_subclass_of('Student' , 'InternationalStudent')?"gpa is present": 'not found';
echo '<br>';
echo '<br>';

echo is_subclass_of('InternationalStudent' , 'Student');
echo '<br>';
echo '<br>';


// a function that checks if a given instence is from a class and it takes 2 parameters the first is the instence (varibale) and the second is the class that needs to be check if its from  
echo is_a($std2 , 'asdfsdf')?"std2 is InternationalStudent": 'std2 not of ';
echo '<br>';
echo '<br>';



// cretes an alias for the class - a nickname for it- while keeping the orignal class untoched 
class_alias('Student' , 'Student_but_with_diffrent_name');
// $std3  = new Student_but_with_diffrent_name('carrot' , 23 );
$std4  = new Student('carrot' , 23 );
// print_r($std3);

echo '<br>';
echo '<br>';


echo '</pre>';

// Logical AND operator (&&) same as js
$age = 25;
$isStudent = true;

if ($age >= 18 && $isStudent) {
    echo "You are eligible for a student discount.";
} else {
    echo "You are not eligible for a student discount.";
}

echo "<br>";

// Logical OR operator () same as js
$hasCoupon = false;
$hasPromoCode = true;

if ($hasCoupon || $hasPromoCode) {
    echo "You can apply a discount to your purchase.";
} else {
    echo "No discount available.";
}

echo "<br>";

// Logical NOT operator (!) same as js
$isPremiumUser = false;

if (!$isPremiumUser) {
    echo "You need to be a premium user to access this feature.";
} else {
    echo "Welcome, premium user!";
}

$x = 100;
$y = 50;

// only returns true if 1 is true so  T, T  = F 
//                                    T, F = T
//                                    F, T = T
//                                    F, F = F
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
