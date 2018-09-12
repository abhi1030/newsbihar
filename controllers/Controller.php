<?php


class Controller extends Database {

  public static function createView($viewName) {
    
    require_once ("./include/startup.php");
    require_once ("./views/header.php");
    require_once ("./views/$viewName.php");
    require_once ("./views/footer.php");


      }
}

?>
