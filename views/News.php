<div class="container-fluid">
  <div class="row" >
    <div class="col-lg-3 bg-light ml-auto mr-auto mt-4 pt-4">
      <h4 class="text-dark text-center">Category</h4>
      <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#" class="text-dark">Latest News</a>
        <span class="badge badge-primary badge-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#" class="text-dark">Bussiness News</a>
        <span class="badge badge-primary badge-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="#" class="text-dark">Sports News</a>
        <span class="badge badge-primary badge-pill">1</span>
    </li>
</ul>
    </div>
    <div class="col-lg-8  bg-light ml-auto mr-auto mt-4 pt-4" style="min-height:500px;">
      <div class="row">
      <?php
      $allnews = Index::query("select * from news");
      $newsno = 0;
      foreach ($allnews as $news){
        if($newsno > 20){
          break;
        }
        echo '<div class="col-lg-4 mb-2">
          <div class="card">
              <iframe width="100%" height="100%" src="'.$news['video'] .'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <div class="card-body">
              <h5 class="card-title">'.$news['title'].'</h5>
              <p class="card-text">'.$news['description'].'</p>
              <span  class="fas fa-thumbs-up ml-2"> Likes <span class="badge badge-danger badge-pill">'.$news['likes'].'</span></span>
              <span  class="fas fa-eye ml-2"> Views <span class="badge badge-success badge-pill">'.$news['views'].'</span></span>
              <a href="" class="btn btn-success mt-2">view</a>
            </div>
          </div>
        </div>';
        $newsno += 1;
      }

      ?>
    </div>
    </div>
  </div>
</div>
