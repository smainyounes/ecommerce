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

		public function loadpage($test = null)
		{
			$data = $this->user->getcontactinfos();
			$infos = $this->user->getuserinfos();
			?>

			<div id="page-content">
			  <div class="container p-4 my-5 shadow">
			  	<?php if(isset($test)): ?>
			  		<?php if($test): ?>
			  			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  			  <strong>Success!</strong> Vos changement ont été bien enregistrer.
			  			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  			    <span aria-hidden="true">&times;</span>
			  			  </button>
			  			</div>
			  		<?php else: ?>
			  			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  			  <strong>Erreur!</strong> Vos changement n'ont pas été enregistrer.
			  			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  			    <span aria-hidden="true">&times;</span>
			  			  </button>
			  			</div>
			  		<?php endif; ?>
			  	<?php endif; ?>
			  	

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
			        <form class="text-center" method="POST">
			          <div class="form-group w-75 text-center mx-auto">
			            <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom d'utilisateur" name="username" value="<?php echo($infos->username) ?>">
			          </div>
			          <button class="btn btn-primary" name="changename">Confirmer</button>
			        </form>
			      </div>
			      <div class="tab-pane fade pt-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			        <form class="text-center" method="POST">
			          <h3 class="text-center">Changer Mot de passe</h3>
			          <div class="form-group w-75 text-center mx-auto">
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Old Password" name="oldpass" required>
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Password" name="pass1" required>
			            <input type="password" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirm Password" name="pass2" required>

			          </div>
			          <button class="btn btn-primary" name="changepass">Confirmer</button>
			        </form>
			      </div>
			      <div class="tab-pane fade pt-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			        <div class="h3 text-center">Changer les infos</div>
			        <form method="POST">
			        	<div class="form-group w-75 text-center mx-auto">
			        	  <input type="text" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="address" value="<?php echo($data->address) ?>">
			        	  <input type="text" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telephone" name="tel" value="<?php echo($data->tel) ?>">
			        	  <input type="email" class="form-control text-center my-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="email" value="<?php echo($data->email) ?>">
			        	  <button class="btn btn-primary" name="changeinfos">Confirmer</button>
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