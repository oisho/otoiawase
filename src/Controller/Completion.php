<?php

namespace App\Controller;

Class Completion extends \App\Controller
{

  public function run()
  {
    // $_SESSION['test'] = "aerlll";
    if ($this->hasError()) {
      return;
    } else {
      // create user
      try {
        $opinionModel = new \App\Model\Opinion();
        $opinionModel->create([
          'name' => $_SESSION['name'],
          'email' => $_SESSION['email'],
          'opinion' => $_SESSION['opinion']
        ]);
      } catch (\MyApp\Exception\DuplicateToiawase $e) {
        $this->setErrors('confirm', $e->getMessage());
        return;
      }
    }
    
  }

  public function mail()
  {
    mb_language("japanese");
    mb_internal_encoding("EUC-JP");
    
    $messageToCliant = <<<END
様

※こちらのメールは自動配信です。\n\n

お問い合わせありがとうございました。\n
以下の内容でお問い合わせを受け付けました。\n

END;
    date_default_timezone_set('Asia/Tokyo');
    $messageToCliant = htmlspecialchars($_SESSION['name']).$messageToCliant.htmlspecialchars(date('y/m/d h:m:s'))."\n\nお問い合わせ内容\n".htmlspecialchars($_SESSION['opinion']);

    mb_send_mail("ijichi@aveclab.com", "お問い合わせを受け付けました。", $messageToCliant, "From: hoge@example.com");
    echo $messageToCliant; // テスト
    return mb_send_mail(htmlspecialchars($_SESSION['email']), "お問い合わせを受け付けました。", $messageToCliant, "From: hoge@example.com");
  }
  
}

//80f54727