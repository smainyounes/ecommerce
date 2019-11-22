<?php 

	/**
	 * admin login view
	 */
	class view_login
	{
		
		private $user;

		function __construct()
		{
			$this->user = new controller_user();
		}

		public function loadpage($msg = null)
		{
			?>

			<!DOCTYPE html>
			<html>
			<head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


				<!-- Bootstrap CSS -->
				<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

				<!-- Custom fonts for this template -->
				<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
				<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
				<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

				<title>Admin Panel | Login</title>
			</head>
			<body class="bg-dark">
				<style type="text/css">
					:root {
					  --input-padding-x: 1.5rem;
					  --input-padding-y: .75rem;
					}

					body {
					  background: #007bff;
					  background: linear-gradient(to right, #0062E6, #33AEFF);
					}

					.card-signin {
					  border: 0;
					  border-radius: 1rem;
					  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
					}

					.card-signin .card-title {
					  margin-bottom: 2rem;
					  font-weight: 300;
					  font-size: 1.5rem;
					}

					.card-signin .card-body {
					  padding: 2rem;
					}

					.form-signin {
					  width: 100%;
					}

					.form-signin .btn {
					  font-size: 80%;
					  border-radius: 5rem;
					  letter-spacing: .1rem;
					  font-weight: bold;
					  padding: 1rem;
					  transition: all 0.2s;
					}

					.form-label-group {
					  position: relative;
					  margin-bottom: 1rem;
					}

					.form-label-group input {
					  height: auto;
					  border-radius: 2rem;
					}

					.form-label-group>input,
					.form-label-group>label {
					  padding: var(--input-padding-y) var(--input-padding-x);
					}

					.form-label-group>label {
					  position: absolute;
					  top: 0;
					  left: 0;
					  display: block;
					  width: 100%;
					  margin-bottom: 0;
					  /* Override default `<label>` margin */
					  line-height: 1.5;
					  color: #495057;
					  border: 1px solid transparent;
					  border-radius: .25rem;
					  transition: all .1s ease-in-out;
					}

					.form-label-group input::-webkit-input-placeholder {
					  color: transparent;
					}

					.form-label-group input:-ms-input-placeholder {
					  color: transparent;
					}

					.form-label-group input::-ms-input-placeholder {
					  color: transparent;
					}

					.form-label-group input::-moz-placeholder {
					  color: transparent;
					}

					.form-label-group input::placeholder {
					  color: transparent;
					}

					.form-label-group input:not(:placeholder-shown) {
					  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
					  padding-bottom: calc(var(--input-padding-y) / 3);
					}

					.form-label-group input:not(:placeholder-shown)~label {
					  padding-top: calc(var(--input-padding-y) / 3);
					  padding-bottom: calc(var(--input-padding-y) / 3);
					  font-size: 12px;
					  color: #777;
					}

				</style>
				<?php if(isset($msg)): ?>
				<div class="container mt-5">
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Error</strong> username ou password incorrect.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
				<?php endif; ?>
				<div class="container">
				    <div class="row">
				      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				        <div class="card card-signin my-5">
				          <div class="card-body text-center">
				          	<img src="img/logo_black.png" class="card-title" width="150px" alt="Login">
				            <form class="form-signin" method="POST">
				              <div class="form-label-group">
				                <input type="text" id="user" class="form-control" placeholder="username" name="username" required autofocus>
				                <label for="user">username</label>
				              </div>

				              <div class="form-label-group">
				                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
				                <label for="inputPassword">Password</label>
				              </div>

				              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Login</button>
				            </form>
				          </div>
				        </div>
				      </div>
				    </div>
				</div>

				<!-- Optional JavaScript -->
				<!-- jQuery first, then Popper.js, then Bootstrap JS -->
				<script src="../vendor/jquery/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
				<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			</body>
			</html>
			
			<?php
		}

	}

 ?>