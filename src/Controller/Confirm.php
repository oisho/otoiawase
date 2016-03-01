<?php

namespace App\Controller;

// if(isset($app)){echo"aruu@COntact";}
// else{echo "naiy@Contact";}

Class Confirm extends \App\Controller {

  public function run() {
    // $methods = get_class_methods($this->app);
    // foreach ($methods as $value){
    //   echo $value;
    //   echo "<br>";
    // }
    // echo "@Contact";

    // return $this->app->renderer->render($response, 'contact.php', $args);
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['opinion'] = $_POST['opinion'];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      return $this->postProcess();
    }
  }

  protected function postProcess() {

    try {
      $this->_validate();
    } catch (\App\Exception\EmptyPost $e) { //m
      $_SESSION['confirm'] = $e->getMessage();
      return false;
    } catch (\App\Exception\InvalidEmail $e) { //m
      $_SESSION['confirm'] = $e->getMessage();
      return false;
    } catch (\App\Exception\InvalidToken $e) { //m
      $_SESSION['confirm'] = $e->getMessage();
      return false;
    }
    return true;
  }

  private function _validate() {
    if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      throw new \App\Exception\InvalidToken();
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      throw new \App\Exception\InvalidEmail();
    }
    if ($_POST['name'] === '' || $_POST['email'] === '' || $_POST['opinion'] === '') {
      throw new \App\Exception\EmptyPost();
    }
  }





  // private function _validate() {
  //   if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
  //     echo "Invalid Token!";
  //     exit;
  //   }

  //   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  //     throw new \MyApp\Exception\InvalidEmail();
  //   }

  //   if (!preg_match('/\A[a-zA-Z0-9]+\z/', $_POST['password'])) {
  //     throw new \MyApp\Exception\InvalidPassword();
  //   }
  // }
  
}