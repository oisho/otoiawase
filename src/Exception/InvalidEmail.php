<?php
 
namespace App\Exception;

class InvalidEmail extends \Exception {
  protected $message = 'メールアドレスをしっかり入れてほしいな!';
}