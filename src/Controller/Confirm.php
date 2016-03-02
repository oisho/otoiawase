<?php

namespace App\Controller;

Class Confirm extends \App\Controller
{

  public function run() {

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
    } catch (\App\Exception\TooLongName $e) { //m
      $_SESSION['confirm'] = $e->getMessage();
      return false;
    } catch (\App\Exception\TooLongEmail $e) { //m
      $_SESSION['confirm'] = $e->getMessage();
      return false;
    } catch (\App\Exception\TooLongOpinion $e) { //m
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
    if (mb_strlen($_POST['name']) > 255) {
      throw new \App\Exception\TooLongName();
    }
    if (strlen($_POST['email']) > 255) {
      throw new \App\Exception\TooLongEmail();
    }
    if (mb_strlen($_POST['opinion']) > 2000) {
      throw new \App\Exception\TooLongOpinion();
    }
  }
}