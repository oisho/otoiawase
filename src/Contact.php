<?php

namespace App\Controller;

// if(isset($app)){echo"aruu@COntact";}
// else{echo "naiy@Contact";}

Class Contact extends \App\Controller {

  public function run() {
    // $methods = get_class_methods($this->app);
    // foreach ($methods as $value){
    //   echo $value;
    //   echo "<br>";
    // }
    // echo "@Contact";

    // return $this->app->renderer->render($response, 'contact.php', $args);


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $this->postProcess();
    }
  }

  protected function postProcess() {
    // validate
    // try {
    //   $this->_validate();
    // } catch (\MyApp\Exception\InvalidName $e) { //m
    //   $this->setErrors('name', $e->getMessage()); 
    // } catch (\MyApp\Exception\InvalidEmail $e) { //m
    //   $this->setErrors('email', $e->getMessage()); 
    // } catch (\MyApp\Exception\InvalidOpinion $e) { //m
    //   $this->setErrors('opinion', $e->getMessage());
    // }

    // $this->setValues('name', $_POST['name']);
    // $this->setValues('email', $_POST['email']);
    // $this->setValues('opinion', $_POST['opinion']);

    // if ($this->hasError()) {
    //   return;
    // } else {
      //     // create user
      // try{
      //   $userModel = new \MyApp\Model\User();
      //   $userModel->create([
      //     'email' => $_POST['email'],
      //     'password' => $_POST['password']
      //   ]);
      // } catch (\MyApp\Exception\DuplicateEmail $e) {
      //   $this->setErrors('email', $e->getMessage());
      //   return;
      // }
          // redirect to login
    //   header('Location: ' . SITE_URL . '/confirm');
    // }
    // echo "Location: " . SITE_URL . '/confirmいけるか@COntact<br>';





    // header('Location: ' . '/confirm');
    // exit();//←忘れずに！

    // header('Location: ' . 'http://www.yahoo.co.jp/');
    // $this->app->redirect('http://www.yahoo.co.jp/');
    // array get_class_methods ( mixed $class_name )
    // echo $this->app->getContainer()->get('router')->pathFor('confirm');

    // if (isset( $this->app->getContainer())) {
    //         echo "getcontある〜<br>";
    //     }

    // if (isset( $this->app)) {
    //         echo "appある〜";
    //     }else{
    //       echo "appない〜";
    //     }
    // $this->app->router->pathFor('confirm');

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