<?php 

	/**
	 * settings view in the admin panel
	 */
	class view_settings
	{
				
		private $user; 

		function __construct()
		{
			$this->user = new controller_user();
		}

		public function loadpage()
		{
			?>

			<div id="page-content">
			  <div class="container p-4 my-5 shadow">
			    <nav >
			      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
			        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
			        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
			        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
			      </div>
			    </nav>
			    <div class="tab-content" id="nav-tabContent">
			      <div class="tab-pane fade show active pt-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			        <h3 class="text-center">Changer Nom d'utilisateur</h3>
			        <form class="text-center">
			          <div class="form-group w-75 text-center mx-auto">
			            <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom d'utilisateur">
			          </div>
			          <button class="btn btn-primary">Confirmer</button>
			        </form>
			      </div>
			      <div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			        <form class="text-center">
			          <h3 class="text-center">Changer Mot de passe</h3>
			          <div class="form-group w-75 text-center mx-auto">
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password">
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password">
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password">

			          </div>
			          <button class="btn btn-primary">Confirmer</button>
			        </form>
			      </div>
			      <div class="tab-pane fade pt-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			        <div class="h3 text-center">Changer les infos</div>
			        <form>
			        	<div class="form-group w-75 text-center mx-auto">
			        	  <input type="text" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">
			        	  <input type="text" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone">
			        	  <input type="email" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
			        	  <button class="btn btn-primary">Confirmer</button>
			        	</div>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
			
			<?php
		}

	}

 ?>