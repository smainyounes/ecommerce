<?php 

	/**
	 * adding or edit a product
	 */
	class view_addprod
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
				<div class="h1 text-center mt-3">Ajouter Nouveau Produit</div>
				<!-- Form -->
				<form class="container shadow p-3 my-3">
					<!-- alert success -->
					<div class="container">
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>

					<!-- alert error -->
					<div class="container">
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					</div>
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nom du Produit</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom du Produit">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Categorie</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				    	<option>Meubles</option>
				    	<option>Electromenager</option>
				    </select>
				  </div>
				  <div class="form-group custom-file">
				    <input type="file" class="custom-file-input" id="customFile" multiple="">
				    <label class="custom-file-label" for="customFile">Images du Produit</label>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Description</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>

				  <div class="form-group text-center">
				  	<a href="#" class="btn btn-primary">Ajouter</a>
				  </div>
				</form>
			</div>

			<?php
		}
	}

 ?>