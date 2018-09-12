<?php

Route::set('index.php', function(){
  Index::createView('Index');
});
Route::set('news', function(){
  News::createView('News');
});

Route::set('stories', function(){
  Stories::createView('Stories');
});

Route::set('about-us', function(){
  //AboutUs::test();
  AboutUs::createView('AboutUs');

});

Route::set('contacts', function(){
  ContactUs::createView('ContactUs');
});

Route::set('login', function(){
  Login::createView('Login');

});

Route::set('register', function(){
  Register::createView('Register');
});

Route::set('profile', function(){
  Profile::createView('Profile');
});

Route::set('notification', function(){
  Notificationr::createView('Notification');
});

Route::set('logout', function(){
  session_start();
  session_destroy();
  header('location: ./');
});

Route::set('dashboard', function(){
  Dashboard::createView();
});


?>
