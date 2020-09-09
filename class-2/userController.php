<?php 

include("./baseController.php");

class UserController extends BaseController  { 
  
  private $fullName = "";

  private $firstName = ""; 
  private $lastName = "";

  static $age = 30;

  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  public function setlastName($lastName) {
    $this->lastName = $lastName;
  }

  public function getFullName() {
    $this->fullName =  $this->firstName . " ".$this->lastName;
    return $this->fullName;
  }

  public function addUser() {
    $user = ['first_name'=>$this->firstName, "last_name"=>$this->lastName];
    $this->setUser($user);
  }

}


$user = new UserController();

$user->setFirstName("Mr."); 
$user->setlastName("Karim");
$user->addUser();

$myUser = $user->getUser();

var_dump($myUser);