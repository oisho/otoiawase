<?php

namespace App\Exception;

class TooLongOpinion extends \Exception {
  protected $message = 'ご意見は2000文字以内でたのむわ、困るのこっちなんだよね。';
}