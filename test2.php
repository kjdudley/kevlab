<?php
  $object1 = new Investigator();
  print_r($object1); echo "<br>";
  
  $object1->username = "dudleyk";
  //$object1->password = "abracadabra";
  $object2 = clone $object1;
  print_r($object1); echo "<br>";
  echo $object1->get_password(); echo "<br>";
  print_r($object2); echo "<br>";
  $object2->username = "Amy";
  $object1->password = "abracadabra";
  $object2->password = "magicword";
  print_r($object1); echo "<br>";
  print_r($object2); echo "<br>";
  
  echo "object1 name = " . $object1->username . "<br>";
  echo "object1 password = " . $object1->password . "<br>";
  echo "object2 name = " . $object2->username . "<br>";
  echo Investigator::$question; echo "<br>";
  echo $object2->pwd_string() . "<br>";
  echo $object2->get_password() . "<br>";
  Investigator::pwd_string(); echo "<br>";

  Translate::lookup(); echo "<br>";

  $temp = new Test;

  echo "Test A: " . Test::$static_property . "<br>";
  echo "Test B: " . $temp->get_sp() . "<br>";
  echo "Test C: " . $temp->static_property . "<br>";
  
  $object3 = new Moreinfo();
  $object3->username = "dudders";
  $object3->phone = "0481014992";
  $object3->email = "kevin.dudley@qut.edu.au";
  //$object3->city = "Brisbane";
  print_r($object3); echo "<br>";
  $object3->display();
  $object3->pwd_string2();

  class Investigator
  {
    public $username, $password="password";
    static $question = "What is your password?";

    function get_password()
    {
      return $this->password;
    }
    static function pwd_string()
    {
      echo "Please enter your password";
    }

  }
  
  class Moreinfo extends Investigator
  {
    public $phone, $email;

    function display()
    {
      echo "Name: " . $this->username . "<br>";
      echo "Pass: " . $this->password . "<br>";
      echo "Phone: " . $this->phone . "<br>";
      echo "Email: " . $this->email . "<br>";
    }

    static function pwd_string()
    {
      echo "Don't enter your password";
    }

    function pwd_string2()
    {
      parent::pwd_string();
    }
  }


  class Translate
  {
    const ENGLISH = "Hello";
    const SPANISH = "Hola";
    const FRENCH = "Bonjour";
    const GERMAN = "Hallo";
  
    static function lookup()
    {
      echo self::GERMAN;
    }
  }

 class Test
 {
   static $static_property = "I'm static";

   function get_sp()
   {
     return self::$static_property;
   }

 }
?>
