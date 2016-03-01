<?php

namespace App;

class Controller {

  private $_errors;
  private $_values;
  private $settings;
  protected $app;

  public function __construct() {

    $this->settings = require __DIR__ . '/../src/settings.php';
    $this->app = new \Slim\App($this->settings);

    $this->_errors = new \stdClass();
    $this->_values = new \stdClass();
  }

  public function setValues($key, $value) {
    $this->_values->$key = $value;
  }

  public function getValues() {
    return $this->_values;
  }

  protected function setErrors($key, $error) {
    $this->_errors->$key = $error;
  }

  public function getErrors($key) {
    return isset($this->_errors->$key) ?  $this->_errors->$key : '';
  }

  protected function hasError() {
    return !empty(get_object_vars($this->_errors));
  }

}
