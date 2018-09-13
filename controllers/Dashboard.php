<?php

class Dashboard extends Database {
  public static function createView() {
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $users = self::query('select * from users where username = "'.$username.'"' );
      foreach ($users as $user) {
        if($user['username'] == $username && $user['password'] == $password){
          $_SESSION['username'] = $user['username'];
          $_SESSION['firstname'] = $user['firstName'];
          $_SESSION['lastname'] = $user['lastName'];
          $_SESSION['phone'] = $user['phone'];
          $_SESSION['email'] = $user['email'];
          $_SESSION['user_type'] = $user['user_type'];
        }
      }

    }
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin'){
      require_once ("./views/Dashboard.php");
    }else{
      header("location: ./");
    }
    //require_once ("./views/Dashboard.php");

      }
}

 ?>
