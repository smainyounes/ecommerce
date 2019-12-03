<?php 

	/**
	 * adding or edit a product
	 */
	class view_addprod
	{
		
		private $product;
		private $category;
		

		function __construct()
		{
			$this->product = new controller_product();
			$this->category = new controller_category();
		}

		public function loadpage($res = null)
		{
			$categ = $this->category->getall();
			?>

			<div class="container" id="page-content">
				<div class="h1 text-center mt-3">Ajouter Nouveau Produit</div>
				<!-- Form -->
				<form class="container shadow p-3 my-3" method="POST" enctype="multipart/form-data">
				  <div class="form-group">
				    <label for="exampleFormControlInput1">Nom du Produit</label>
				    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom du Produit" name="nomprod" required>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Categorie</label>
				    <select class="form-control" id="exampleFormControlSelect1" name="categ" required>
				    	<?php foreach($categ as $cat): ?>
				    	<option value="<?php echo($cat->id_categ) ?>"><?php echo $cat->nom_category; ?></option>
					    <?php endforeach; ?>
				    </select>
				  </div>
				  <div class="form-group">
				  	<label>Prix (en DA)</label>
				  	<input type="number" class="form-control" name="price" placeholder="1200" required>
				  </div>
				  <div class="form-group custom-file">
				    <input type="file" class="custom-file-input" id="customFile" multiple="" name="imgprod[]" required>
				    <label class="custom-file-label" for="customFile">Images du Produit</label>
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Description</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descprod" required></textarea>
				  </div>

				  <div class="form-group text-center">
				  	<button class="btn btn-primary" name="addnew">Ajouter</button>
				  </div>
				</form>
			</div>

			<?php
		}
	}

 ?>