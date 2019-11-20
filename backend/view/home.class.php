<?php 
	/**
	 * home view
	 */
	class view_home
	{

		private $product;
		private $category;

		function __construct()
		{
			$this->product = new controller_product();
			$this->category = new controller_category();
		}

		public function loadpage()
		{
			?>

			<!-- Page Content -->
			<div class="container bg-light" id="page-content">

			  <div class="row">

			    <div class="col-lg-3">

			      <h1 class="my-4">E-Commerce</h1>
			      <div class="list-group">
			        <a href="index.php?categ=0" class="list-group-item active">Tout</a>
			        <a href="index.php?categ=1" class="list-group-item">Meubles</a>
			        <a href="index.php?categ=2" class="list-group-item">Electromenager</a>
			      </div>

			    </div>
			    <!-- /.col-lg-3 -->

			    <div class="col-lg-9">
			      <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
			        <ol class="carousel-indicators">
			          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			        </ol>
			        <div class="carousel-inner" role="listbox">
			          <div class="carousel-item active">
			            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide" width="900px">
			          </div>
			          <div class="carousel-item">
			            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
			          </div>
			          <div class="carousel-item">
			            <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
			          </div>
			        </div>
			        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			          <span class="sr-only">Previous</span>
			        </a>
			        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			          <span class="carousel-control-next-icon" aria-hidden="true"></span>
			          <span class="sr-only">Next</span>
			        </a>
			      </div>

			      <div class="row">

			        <div class="col-lg-4 col-md-6 mb-4">
			          <div class="card h-100">
			            <a href="detail.php"><img class="card-img-top" src="img/exemples/1.jpg" alt=""></a>
			            <div class="card-body">
			              <h4 class="card-title">
			                <a href="detail.php">Item Name</a>
			              </h4>
			              
			              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
			            </div>
			            <div class="card-footer">
			              <h5 class="text-center">12 000 DA</h5>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-4 col-md-6 mb-4">
			          <div class="card h-100">
			            <a href="detail.php"><img class="card-img-top" src="img/exemples/8.jpg" alt=""></a>
			            <div class="card-body">
			              <h4 class="card-title">
			                <a href="detail.php">Item Name</a>
			              </h4>
			              
			              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
			            </div>
			            <div class="card-footer">
			              <h5 class="text-center">12 000 DA</h5>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-4 col-md-6 mb-4">
			          <div class="card h-100">
			            <a href="detail.php"><img class="card-img-top" src="img/exemples/5.jpg" alt=""></a>
			            <div class="card-body">
			              <h4 class="card-title">
			                <a href="detail.php">Item Name</a>
			              </h4>
			              
			              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
			            </div>
			            <div class="card-footer">
			              <h5 class="text-center">12 000 DA</h5>
			            </div>
			          </div>
			        </div>

			        <div class="col-lg-4 col-md-6 mb-4">
			          <div class="card h-100">
			            <a href="detail.php"><img class="card-img-top" src="img/exemples/10.jpg" alt=""></a>
			            <div class="card-body">
			              <h4 class="card-title">
			                <a href="detail.php">Item Name</a>
			              </h4>
			              
			              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
			            </div>
			            <div class="card-footer">
			              <h5 class="text-center">12 000 DA</h5>
			            </div>
			          </div>
			        </div>
			      </div>
			      <!-- /.row -->

			    </div>
			    <!-- /.col-lg-9 -->

			  </div>
			  <!-- /.row -->

			</div>
			<!-- /.container -->

			<?php
		}


	}


 ?>