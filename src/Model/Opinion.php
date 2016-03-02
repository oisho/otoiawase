<?php

namespace App\Model;

class Opinion extends \App\Model {
  public function create($values) {
    $stmt = $this->db->prepare("insert into contents (name, email, opinion, created) values (:name, :email, :opinion, now())");
    $res = $stmt->execute([
      ':name' => $_SESSION['name'],
      ':email' => $_SESSION['email'],
      ':opinion' => $_SESSION['opinion']
    ]);
    if ($res === false) {
      throw new \MyApp\Exception\DuplicateToiawase();
    }
  }
}
