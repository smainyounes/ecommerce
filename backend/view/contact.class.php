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

		public function loadpage()
		{
			?>
				<div class="container" id="page-content">
					<h1 class="text-center">Contactez-Nous</h1>
					<div class="row my-2 py-4">
						<div class="col-md-6">
							<form>
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlInput1">Nom complet</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nom Prenom" required>
							  </div>
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlInput1">Numero Tel</label>
							    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Numero Tel" required>
							  </div>
							  <div class="form-group">
							    <label class="h5" for="exampleFormControlTextarea1">Message</label>
							    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
							  </div>
							  <button class="btn btn-primary">Envoyer</button>
							</form>
						</div>

						<div class="col-md-6 py-5">
							<table class="mb-5" width="100%">
							  <tr>
							    <td align="center" rowspan="3" valign="top" width="20%"><i class="fa fa-paper-plane fa-2x text-primary"></i></td>
							    <td class="h2 pb-2">Nos Contact</td>
							  </tr>
							  <tr>
							    <td>Email: support@exemple.com</td>
							  </tr>
							  <tr>
							    <td>Telephone: 0123456789</td>
							  </tr>
							</table>
							<table class="mb-5" width="100%">
							  <tr>
							    <td align="center" rowspan="3" valign="top" width="20%"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></td>
							    <td class="h2 pb-2">Address</td>
							  </tr>
							  <tr>
							    <td>Blida - Blida</td>
							  </tr>
							</table>
						</div>
					</div>
				</div>
			<?php
		}

	}
	
 ?>