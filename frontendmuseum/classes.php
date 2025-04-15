<?php

spl_autoload_register(function($class_name) {
  include_once "classes/$class_name.php";
});
 // spl_autoload_register means it will trigger everytime you try to instantiate a class,
 // and everytime you do that the function inside spl_autoload_register will be called and
 // will include the file named after the class name.
?>
