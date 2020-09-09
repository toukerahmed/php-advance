<?php 

class BaseController {
  
  protected $user; 

  protected function setUser($user) {
    $this->user = $user;
  }

  public function getUser() {
    return $this->user;
  }

}