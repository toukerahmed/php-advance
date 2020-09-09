<?php 
class UserClass  {
  
  static $fullName = "";

  static $firstName = ""; 
  static $lastName = "";

  static $age = 30;

  static function setFirstName($firstName) {
    self::$firstName = $firstName;
  }

  static function setlastName($lastName) {
    self::$lastName = $lastName;
  }

  static function getFullName() {
    self::$fullName =  self::$firstName . " ".self::$lastName;
    return self::$fullName;
  }

}

UserClass::setFirstName("Mr."); 
UserClass::setlastName("Karim");

echo UserClass::getFullName();

echo "<br/>"; 

echo UserClass::$age;