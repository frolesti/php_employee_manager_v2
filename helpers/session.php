<?php

class Session
{

  private $id;
  private $sessionTime;

  function __construct($id)
  {
    session_start();
    $this->id = $id;
    $this->sessionTime = time() + 600;
  }

  function checkSession(){
    if(isset($this->id)){
      return true;
    }
    else {
      return false;
    }
  }

  function timer(){
    if(time()> $this->sessionTime){
      session_start();
      session_destroy();
    }
  }
}
