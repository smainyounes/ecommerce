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

			$categ = $this->category->getall();
			$all = 0;
			if (isset($_GET['categ'])) {
				$data = $this->product->getbycateg($_GET['categ']);
				$all = $_GET['categ'];
			}else{
				$data = $this->product->getallprod();
			}

			?>
			<!-- Page Content -->
			<div class="container bg-light" id="page-content">

			  <div class="row">

			    <div class="col-lg-3">

			      <h1 class="my-4">E-Commerce</h1>
			      <div class="list-group">
			        <a href="index.php" class="list-group-item <?php if($all == 0) echo('active') ?>">Tout</a>
			      	<?php foreach($categ as $row) :?>
				        <a href="index.php?categ=<?php echo($row->id_categ) ?>" class="list-group-item <?php if($all == $row->id_categ) echo('active') ?>">
				        	<?php echo($row->nom_category) ?>
				        		
				        	</a>
			        <?php endforeach; ?>
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
			      	<?php if($data): ?>
			      		<?php foreach($data as $row): ?>
			      		<div class="col-lg-4 col-md-6 mb-4">
			      		  <div class="card h-100">
			      		  	<?php if(isset($row->link)): ?>
			      		    	<a href="detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="img/exemples/<?php echo($row->link) ?>" alt="No Image"></a>
			      		    <?php else: ?>
			      		    	<a href="detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="img/noimagefound.jpg"></a>
			      			<?php endif; ?>
			      		    <div class="card-body">
			      		      <h4 class="card-title">
			      		        <a href="detail.php?id=<?php echo($row->id_prod) ?>"><?php echo($row->name) ?></a>
			      		      </h4>
			      		      
			      		      <p class="card-text">
			      		      	<?php echo(shortenText($row->description)) ?>
			      		      </p>
			      		    </div>
			      		    <div class="card-footer">
			      		      <h5 class="text-center"><?php echo($row->price)?> DA</h5>
			      		    </div>
			      		  </div>
			      		</div>
			      		<?php endforeach; ?>
			      	<?php else: ?>
			      		<div class="col-12 h2 text-center p-5">no products</div>
			      	<?php endif ?>

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