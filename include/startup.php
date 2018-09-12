<?php
  session_start();
  //$_SESSION['username'] = 'Abhishek Sinha';
  //session_destroy();
  $page = array('index.php' => 'NewsBihar24x7' , 'about-us' => 'About Us', 'contacts' => 'Contact Us', 'news' => 'News Section', 'login' => 'Login' , 'register' => 'Register');
  $pageTitle = $page[$_GET['url']];


 ?>
