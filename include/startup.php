<?php
  session_start();
  //$_SESSION['username'] = 'Abhishek Sinha';
  //session_destroy();
  $page = array('index.php' => 'NewsBihar24x7' , 'stories' => 'Stories', 'about-us' => 'About Us', 'contacts' => 'Contact Us', 'news' => 'News Section', 'dashboard' => 'Dashboard');
  $pageTitle = $page[$_GET['url']];


 ?>
