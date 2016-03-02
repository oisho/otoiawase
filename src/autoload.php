<?php
 
/*
MyApp
index.php controller
MyApp\Controller\Index
-> lib/Controller/Index.php
*/
 
spl_autoload_register(function($class) {
  $prefix = 'App\\';
  if (strpos($class, $prefix) === 0) {
    $className = substr($class, strlen($prefix));
    $classFilePath = __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classFilePath)) {
          // echo $classFilePath."@autoload<br>";
      require $classFilePath;
    }
  }
});