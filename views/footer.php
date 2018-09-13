<!-- Modal HTML -->
<div id="myloginModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="./dashboard" method="post">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" >
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
					</div>
					<p class="hint-text"><a href="#">Forgot Password?</a></p>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="myregisterModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="row form-group">
						<div class="col input-group">
							<input type="text" class="form-control" name="firstname" placeholder="Firstname" required="required">
						</div>
						<div class="col input-group">
							<input type="text" class="form-control" name="lastname" placeholder="Lastname" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							<input type="text" class="form-control" name="phone" placeholder="Mobile No" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input type="text" class="form-control" name="email" placeholder="Email Id" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="username" placeholder="Username" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input type="text" class="form-control" name="password" placeholder="Password" required="required">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
					</div>

				</form>

			</div>

			</div>
			</div>
			</div>

<div class="container-fluid mt-4">
  <div class="container-fluid">
    <div class="row bg-grey text-light text-center pb-4">
      <div class="col-lg-3 mt-4 pb-4 ml-auto mr-auto ">
        <h3 class="">Useful links</h3>
        <div class="list-group ">
          <a href="./contacts" class="text-light tall">Contact Us</a>
          <a href="./about-us" class="text-light tall">Know more About Us</a>
          <a href="#" class="text-light tall">Join the Mission</a>
          <a href="#" class="text-light tall">Get in touch.</a>
        </div>
      </div>
      <div class="col-lg-3 mt-4 pb-4 ml-auto mr-auto ">
				<h3 class="">Education</h3>
        <div class="list-group ">
          <a href="#" class="text-light tall">Online Cources</a>
          <a href="#" class="text-light tall">Student Guidelines</a>
          <a href="#" class="text-light tall">Best Institutes</a>
          <a href="#" class="text-light tall">Admission Guidelines</a>
        </div>
      </div>
      <div class="col-lg-5 mt-4 pb-4 ml-auto mr-auto">
        <h3>Trending news</h3>
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Bussiness news</h5>
              <small>3 days ago</small>
            </div>
            <p class="mb-1">Some bussiness  news from newsbihar24x7</p>
            <small>By Abhishek sinha</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sports news</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Final test match on monday</p>
            <small class="text-muted">cricket news</small>
          </a>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Political News</h5>
              <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">Bjp has done it again and PM Modi is very happy with the results</p>
            <small class="text-muted">unknown source</small>
          </a>
        </div>
      </div>
    </div>
  </div>

  <p class="text-center text-light bg-dark">&copy; Copyright NewsBihar24x7 2018 . All rights reserved</p>
</div>

</body>
</html>
