<?php

class AboutUs extends Controller {

  public static function test(){
    print_r(self::query("select * from users"));
  }

}

?>
