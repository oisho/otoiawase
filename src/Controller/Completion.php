<?php

namespace Slim;

use Slim;

Class Completion {

  public function mail() {
    mb_language("japanese");
    mb_internal_encoding("EUC-JP");
    
    $messageToCliant = <<<END
　様

※こちらのメールは自動配信です。

お問い合わせありがとうございました。
以下の内容でお問い合わせを受け付けました。

END;
    $messageToCliant = htmlspecialchars($_POST['name']).$messageToCliant.htmlspecialchars($_POST['time'])."\n\nお問い合わせ内容\n".htmlspecialchars($_POST['opinion']);

    mb_send_mail("ijichi@aveclab.com", "お問い合わせを受け付けました。", $messageToCliant, "From: hoge@example.com");
    return mb_send_mail(htmlspecialchars($_POST['email']), "お問い合わせを受け付けました。", $messageToCliant, "From: hoge@example.com");
  }
  
}