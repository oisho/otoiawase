<?php

namespace App;

class Model {
  protected $db;
  public function __construct() {
    try {
      // echo DSN."<br>";
      // echo DB_USERNAME."<br>";
      // echo DB_PASSWORD;
      $this->db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
    } catch (\PDOException $e) {
      echo $e->getMessage();
      echo "chigaude";
      exit;
    }
  }
}