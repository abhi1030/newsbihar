<?php
//require_once ("./include/startup.php");
require_once ('./include/routes.php');

function __autoload($class_name){
  if (file_exists('./classes/'.$class_name . '.php')){
    require_once './classes/'.$class_name . '.php';
  }else if(file_exists('./controllers/'.$class_name .'.php')){
    require_once './controllers/'. $class_name . '.php';
  }

}
//echo $_GET['url'];
 ?>
