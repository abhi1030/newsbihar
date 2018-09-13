<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>NewsBihar24x7</title>

    <!-- Jquery and Popper CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- Bootstrap CDN  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- font awsome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- Custom Style and script -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"> </script>



  </head>
  <body>


    <!-- Top navigation pannel -->
    <div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="#" class="ml-auto mr-auto"><img src="./images/logo.png" width="120px" height="80px" ></a>

      <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./news">News section</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="./stories">Category</a>
        <div class="dropdown-menu">
          <a href="./stories?c=bussiness" class="dropdown-item">Bussiness News</a>
          <a href="./stories?c=latest" class="dropdown-item">Latest News</a>
          <a href="./stories?c=bollywood" class="dropdown-item">Bollywood News</a>
          <a href="./stories?c=political" class="dropdown-item">Political News</a>
          <a href="./stories?c=sports" class="dropdown-item">Sports News</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about-us">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contacts">Contact us</a>
      </li>
    </ul>


    <form class="collapse form-inline mr-2" id="searchBox">
      <input class="form-control" type="search" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
    <button class="searchButton" type="button" data-toggle="collapse" data-target="#searchBox">
      <span class="fa fa-search "> </span>
    </button>


  </div>
</nav>


<!-- Page title and user options -->
<div class="container-fluid">
  <div class="row pt-2 pb-2 pl-2 bg-dark text-light">
    <div class="col-lg-4">
      <h4><?php echo $pageTitle ?></h4>
    </div>
    <?php if(isset($_SESSION['username'])){
      echo '
      <div class="col-lg-2 ml-auto text-left">
        <div class="dropdown">
          <h4>'.$_SESSION['username'].'</h4>
          <a class="text-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> User Action</a>
          <div class="dropdown-menu">
            <a href="./profile" class="dropdown-item">Profile</a>
            <a href="./notification" class="dropdown-item">Notification</a>
            <a href="./logout" class="dropdown-item">Logout</a>
          </div>
        </div>
      </div>
      ';
    }
    else {
      echo '
    <div class="col-lg-2 ml-auto text-left">
      <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> User Account </a>
        <div class="dropdown-menu">
          <a href="#myloginModal" class="dropdown-item trigger-btn" data-toggle="modal">Login</a>
          <a href="#myregisterModal" class="dropdown-item trigger-btn" data-toggle="modal">Register</a>
        </div>
      </div>
    </div>
    ';
  }
    ?>
  </div>
</div>
</div>
<div class="emptySpace">
</div>
