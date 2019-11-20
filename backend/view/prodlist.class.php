<?php 

	/**
	 * product list in the admin panel
	 */
	class view_prodlist
	{

		private $product;


		function __construct()
		{
			$this->product = new controller_product();
		}

		public function loadpage()
		{
			?>

			<div class="container" id="page-content">
				<div class="text-center h1">List des Produits</div>
				<div class="container text-center mt-4">
					<a class="btn btn-primary btn-lg btn-block" href="addprod.php">Ajouter</a>
				</div>
				<div class="row my-4">
					<div class="col-lg-4 col-md-6 my-2">
						<div class="card mx-auto h-100" style="width: 90%;">
						  <a href="../detail.php"><img class="card-img-top" src="../img/exemples/1.jpg" alt=""></a>
						  <div class="card-body">
						    <h4 class="card-title">
						      <a href="../detail.php">Item Name</a>
						    </h4>
						    
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
						    <h5 class="">12 000 DA</h5>

						  </div>
						  <div class="card-footer">
						  	<button class="btn btn-danger">Supprimer</button>
						  	<button class="btn btn-warning">Modifier</button>

						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<?php
		}

	}

 ?>