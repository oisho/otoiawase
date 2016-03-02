<?php

namespace App\Exception;

class TooLongName extends \Exception {
  protected $message = '名前は255文字以内でたのむわ、うんまじ';
}