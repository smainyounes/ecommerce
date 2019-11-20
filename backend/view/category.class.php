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

		public function loadpage()
		{
			?>

				<!-- list -->
			  <div id="page-content">
			    <div class="container p-2 my-4 shadow">
			      <div class="container text-center my-2">
			        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			          Add new Category
			        </button>
			      </div>
			      <table class="table table-hover table-bordered">
			        <thead>
			          <tr>
			            <th scope="col">Nom Categorie</th>
			            <th scope="col">Modifier</th>
			            <th scope="col">Supprimer</th>
			          </tr>
			        </thead>
			        <tbody>
			          <tr>
			            <td>Meuble</td>
			            <td><button class="btn btn-warning">Modifier</button></td>
			            <td><button class="btn btn-danger">Supprimer</button></td>
			          </tr>   
			          <tr>
			            <td>Meuble</td>
			            <td><button class="btn btn-warning">Modifier</button></td>
			            <td><button class="btn btn-danger">Supprimer</button></td>
			          </tr>
			          <tr>
			            <td>Meuble</td>
			            <td><button class="btn btn-warning">Modifier</button></td>
			            <td><button class="btn btn-danger">Supprimer</button></td>
			          </tr>       
			        </tbody>
			      </table>
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
			          <div class="modal-body">
			              <div class="form-group">
			                <label for="exampleFormControlInput1">Nom Categorie</label>
			                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom Categorie">
			              </div>
			          </div>
			          <div class="modal-footer">
			            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			            <button type="button" class="btn btn-primary">Ajouter</button>
			          </div>
			        </div>
			      </div>
			    </div>
			
			<?php
		}
	}

 ?>