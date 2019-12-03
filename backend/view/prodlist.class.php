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

			$data = $this->product->getallprod();

			?>

			<div class="container" id="page-content">
				<div class="text-center h1 mt-2">List des Produits</div>
				<div class="container text-center mt-4">
					<a class="btn btn-primary btn-lg btn-block" href="addprod.php">Ajouter</a>
				</div>
				<?php if(isset($_GET['msg'])): ?>
					<?php if($_GET['msg'] === "done"): ?>
						<div class="container mt-3">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
							  <strong>Success!</strong> Votre produit a été bien ajouter.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						</div>
					<?php else: ?>
						<div class="container mt-3">
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
							  <strong>Error!</strong> Votre produit n'a pas été bien ajouter.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>
				<?php if($data): ?>
				<div class="row my-4">
					<?php foreach($data as $row): ?>
					<div class="col-lg-4 col-md-6 my-2">
						<div class="card mx-auto h-100" style="width: 90%;">
							<?php if(isset($row->link)): ?>
			      		    	<a href="../detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="../img/exemples/<?php echo($row->link) ?>" alt="No Image"></a>
			      		    <?php else: ?>
			      		    	<a href="../detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="../img/noimagefound.jpg"></a>
			      			<?php endif; ?>
						  
						  <div class="card-body">
						    <h4 class="card-title">
						      <a href="../detail.php?id=<?php echo($row->id_prod) ?>"><?php echo $row->name; ?></a>
						    </h4>
						    
						    <p class="card-text"><?php echo(shortenText($row->description)) ?></p>
						    <h5 class="text-center"><?php echo($row->price)?> DA</h5>

						  </div>
						  <div class="card-footer">
						  	<button class="btn btn-danger">Supprimer</button>
						  	<a href="addprod.php?id=<?php echo($row->id_prod) ?>" class="btn btn-warning">Modifier</a>

						  </div>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
				<?php else: ?>
					<div class="h1 text-center">No products</div>
				<?php endif; ?>
			</div>
			
			<?php
		}

	}

 ?>