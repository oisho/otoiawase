<?php

namespace App\Exception;

class TooLongEmail extends \Exception {
  protected $message = 'emailは255文字以内でたのむわ、うんまじ';
}