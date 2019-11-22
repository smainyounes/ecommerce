<?php 
	
	/**
	 * contact view
	 */
	class view_contact
	{
		
		private $contact;

		function __construct()
		{
			$this->contact = new controller_contact();
		}

		public function loadpage($msgres = null)
		{

			$infos = $this->contact->getinfos();

			?>
				<div class="container" id="page-content">
					<h1 class="text-center">Contactez-Nous</h1>
					<?php if(isset($msgres)): ?>
						<?php if($msgres): ?>
							<div class="container">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
								  <strong>Succes</strong> Votre message a été bien envoyé.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
							</div>
						<?php else: ?>
							<div class="container">
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  <strong>Erreur</strong> Votre message n'a pas été envoyer.
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    <span aria-hidden="true">&times;</span>
								  </button>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					<div class="row my-2 py-4">
						<div class="col-md-6">
							<form method="POST">
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlInput1">Nom complet</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom Prenom" name="fullname" required>
							  </div>
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlInput1">Numero Tel</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Numero Tel" name="number" required>
							  </div>
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlTextarea1">Message</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message" required></textarea>
							  </div>
							  <button class="btn btn-primary" name="msg">Envoyer</button>
							</form>
						</div>

						<div class="col-md-6 py-5">
							<table class="mb-5" width="100%">
							  <tr>
							    <td align="center" rowspan="3" valign="top" width="20%"><i class="fa fa-paper-plane fa-2x text-primary"></i></td>
							    <td class="h2 pb-2">Nos Contact</td>
							  </tr>
							  <tr>
							    <td>Email: <?php echo $infos->email; ?></td>
							  </tr>
							  <tr>
							    <td>Telephone: <?php echo $infos->tel; ?></td>
							  </tr>
							</table>
							<table class="mb-5" width="100%">
							  <tr>
							    <td align="center" rowspan="3" valign="top" width="20%"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></td>
							    <td class="h2 pb-2">Address</td>
							  </tr>
							  <tr>
							    <td><?php echo $infos->address; ?></td>
							  </tr>
							</table>
						</div>
					</div>
				</div>
			<?php
		}

	}
	
 ?>