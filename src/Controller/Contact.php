<?php

namespace App\Controller;

Class Contact extends \App\Controller
{

  public function run() {

    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }

    if ($_SERVER["REQUEST_METHOD"] !== "POST" && $_SESSION['err'] !== true) {
    $_SESSION['name'] = "";
    $_SESSION['email'] = "";
    $_SESSION['opinion'] = "";
    }

  $_SESSION['err'] = false;

  }
}