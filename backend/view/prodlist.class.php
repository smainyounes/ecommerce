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
				<div class="text-center h1">List des Produits</div>
				<div class="container text-center mt-4">
					<a class="btn btn-primary btn-lg btn-block" href="addprod.php">Ajouter</a>
				</div>
				<?php if($data): ?>
				<div class="row my-4">
					<?php foreach($data as $row): ?>
					<div class="col-lg-4 col-md-6 my-2">
						<div class="card mx-auto h-100" style="width: 90%;">
							<?php if(isset($row->link)): ?>
			      		    	<a href="detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="../img/exemples/<?php echo($row->link) ?>" alt="No Image"></a>
			      		    <?php else: ?>
			      		    	<a href="detail.php?id=<?php echo($row->id_prod) ?>"><img class="card-img-top" src="../img/noimagefound.jpg"></a>
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