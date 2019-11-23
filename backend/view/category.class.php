<?php 

	/**
	 * category page in the admin panel
	 */
	class view_category
	{
		
		private $category;

		function __construct()
		{
			$this->category = new controller_category();
		}

		public function loadpage($res = null)
		{

			$data = $this->category->getall();

			?>

				<!-- list -->
			  <div id="page-content">
			    <div class="container p-2 my-4 shadow">
			      <div class="container text-center my-2">
			        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			          Add new Category
			        </button>
			      </div>

			      <?php if(isset($res)): ?>
			      	<?php if($res): ?>
			      		<div class="alert alert-success alert-dismissible fade show" role="alert">
			      		  <strong>Success</strong> Votre category a été bien ajouter.
			      		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      		    <span aria-hidden="true">&times;</span>
			      		  </button>
			      		</div>
			      	<?php else: ?>
			      		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			      		  <strong>Erreur</strong> Votre category n'a pas été ajouter.
			      		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			      		    <span aria-hidden="true">&times;</span>
			      		  </button>
			      		</div>
			      	<?php endif; ?>
			      <?php endif; ?>
			      <?php if($data): ?>
			      <table class="table table-hover table-bordered">
			        <thead>
			          <tr>
			            <th scope="col">id</th>
			            <th scope="col">Nom Categorie</th>
			            <th scope="col">Supprimer</th>
			          </tr>
			        </thead>
			        <tbody>
			        	<?php foreach($data as $row): ?>
				          <tr>
				            <td><?php echo $row->id_categ; ?></td>
				            <td><?php echo $row->nom_category; ?></td>
				            <td><button class="btn btn-danger">Supprimer</button></td>
				          </tr>   
      					<?php endforeach; ?>
			        </tbody>
			      </table>
			      <?php else: ?>

			      <?php endif; ?>
			    </div>
			  </div>
			    

			    <!-- Modal -->
			    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			      <div class="modal-dialog" role="document">
			        <div class="modal-content">
			          <div class="modal-header">
			            <h5 class="modal-title" id="exampleModalLabel">Ajouter Categorie</h5>
			            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			              <span aria-hidden="true">&times;</span>
			            </button>
			          </div>
			          <form method="POST">
			          	<div class="modal-body">
			          	    <div class="form-group">
			          	      <label for="exampleFormControlInput1">Nom Categorie</label>
			          	      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom Categorie" name="categ_name">
			          	    </div>
			          	</div>
			          	<div class="modal-footer">
			          	  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			          	  <button type="submit" type="button" class="btn btn-primary" name="newcateg">Ajouter</button>
			          	</div>
			          </form>
			        </div>
			      </div>
			    </div>
			
			<?php
		}
	}

 ?>