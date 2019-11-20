<?php 

	/**
	 * message view in the admin panel
	 */
	class view_message
	{
		
		private $message;

		function __construct()
		{
			$this->message = new controller_message();
		}

		public function loadpage()
		{
			?>

			<div id="page-content">
			  <div class="container py-2">
			    <div class="h1 text-center mb-3">Messagerie</div>
			    <table class="table table-hover table-bordered">
			      <thead>
			        <tr>
			          <th scope="col">Nom complet</th>
			          <th scope="col">Telephone</th>
			          <th scope="col">Message</th>
			          <th scope="col">Date heur</th>
			          <th scope="col">Action</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <th scope="row">James Maine</th>
			          <td>0123456789</td>
			          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor ...</td>
			          <td>12/12/12 12:12</td>
			          <td align="center">
			            <!-- <button class="btn btn-warning my-1">Afficher</button> -->
			            <button class="btn btn-warning my-1" data-toggle="modal" data-target="#exampleModalCenter">Afficher</button>
			            <button class="btn btn-danger my-1">Supprimer</button>
			          </td>
			        </tr>
			        <tr>
			          <th scope="row">James Maine</th>
			          <td>0123456789</td>
			          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor ...</td>
			          <td>12/12/12 12:12</td>
			          <td align="center">
			            <!-- <button class="btn btn-warning my-1">Afficher</button> -->
			            <button class="btn btn-warning my-1" data-toggle="modal" data-target="#exampleModalCenter">Afficher</button>
			            <button class="btn btn-danger my-1">Supprimer</button>
			          </td>
			        </tr>
			        <tr>
			          <th scope="row">James Maine</th>
			          <td>0123456789</td>
			          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			          tempor ...</td>
			          <td>12/12/12 12:12</td>
			          <td align="center">
			            <!-- <button class="btn btn-warning my-1">Afficher</button> -->
			            <button class="btn btn-warning my-1" data-toggle="modal" data-target="#exampleModalCenter">Afficher</button>
			            <button class="btn btn-danger my-1">Supprimer</button>
			          </td>
			        </tr>
			      </tbody>
			    </table>

			  </div>
			</div>

			  <!-- Modal -->
			  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			    <div class="modal-dialog modal-dialog-centered" role="document">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h5 class="modal-title" id="exampleModalCenterTitle">Message</h5>
			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			            <span aria-hidden="true">&times;</span>
			          </button>
			        </div>
			        <div class="modal-body">
			          <div class="float-right text-muted">12/12/12 12:12</div>
			          <div class="h5">Sender: James Maine</div>
			          <div class="h5">Telephone: 123456789</div>
			          <p class="border p-2">
			            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.              
			          </p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
			        </div>
			      </div>
			    </div>
			  </div>
			
			<?php
		}

	}

 ?>