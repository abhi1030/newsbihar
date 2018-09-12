<!-- Corousel -->
<div class="container-fluid">
  <div id="slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./images/slide4.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>First Slide</h5>
          <p>Some information on the slide</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/slide5.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>second Slide</h5>
          <p>Some information on the slide</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/slide6.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third Slide</h5>
          <p>Some information on the slide</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-- page content -->
<div class="container-fluid">
  <div class="row" >
    <div class="col-md-3 bg-light ml-auto mr-auto mt-4 pt-4">
      <h4 class="text-dark text-center">Latest feeds</h4>
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <a href="#" class="text-dark">Bussiness news</a>
          <span class="badge badge-primary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <a href="#" class="text-dark">Political news</a>
          <span class="badge badge-primary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <a href="#" class="text-dark">Sports News</a>
          <span class="badge badge-primary badge-pill">1</span>
        </li>
      </ul>
    </div>
    <div class="col-md-8  bg-light ml-auto mr-auto mt-4 pt-4" >
      <h2>Top Stories</h2><hr>
      <div class="row">

        <!-- The video contents -->
        <div class="col-md-4">
          <div class="card mb-2">
              <iframe width="100%" height="100%" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">News title</h5>
              <p class="card-text">Small description about the news.</p>

              <span  class="fas fa-thumbs-up ml-2"> Likes <span class="badge badge-danger badge-pill">1</span></span>
              <span  class="fas fa-eye ml-2"> Views <span class="badge badge-success badge-pill">1</span></span>
              <a href="" class="btn btn-success mt-2">view</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <div class="card">
              <iframe width="100%" height="100%" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">News title</h5>
              <p class="card-text">Small description of the news.</p>
              <a href="" class="btn btn-primary">view</a>
            </div>
          </div>
        </div>
      </div>

        <h2>Trending news</h2><hr>
        <div class="row">
        <!-- The video contents -->
        <div class="col-md-4 mb-2">
          <div class="card">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/9LzHTAM57HM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">News title</h5>
              <p class="card-text">Small description about the news.</p>
              <a href="" class="btn btn-primary">view</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
