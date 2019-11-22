<?php 
	/**
	 * 
	 */
	class view_detail
	{
		
		private $product;

		function __construct()
		{
			$this->product = new controller_product();
		}

		public function loadpage()
		{

			$infos = $this->product->getsingle($_GET['id']);

			$imgs = $this->product->getimages($_GET['id']);

			?>

			<?php if($infos): ?>

				<div id="page-content">
					<div class="container-fluid mt-4 px-5">
						<div class="row">
							<div class="col-md-6 p-0 border mb-2">
								<?php if($imgs): ?>
									<?php foreach($imgs as $first): ?>
									<div class="main-image text-center">
									  <img src="img/exemples/<?php echo($first->link) ?>" alt="Placeholder" class="custom">
									</div>
									<?php break; ?>
									<?php endforeach; ?>
									<div class="row pl-2 thumbnails">
										<?php foreach($imgs as $img): ?>
										<div class="col-3 p-2">
											<a href="img/exemples/<?php echo($img->link) ?>"><img src="img/exemples/<?php echo($img->link) ?>" alt="Thumbnails"></a>
										</div>
										<?php endforeach; ?>
									</div>
								<?php else: ?>
									<div class="main-image text-center">
									  <img src="img/noimagefound.jpg" alt="Placeholder" class="custom">
									</div>
								<?php endif; ?>
							</div>
							<div class="col-md-6">
								<h2>
									<?php echo $infos->name; ?>
								</h2>
								<div class="h4">Prix : <?php echo $infos->price; ?> DA</div>

								<p>
									<?php echo $infos->description; ?>
								</p>

							</div>
						</div>
					</div>
				</div>
			<?php else: ?>
				<div id="page-content">
					<div class="h1 text-center mt-5">produit n'existe pas </div>
				</div>
			<?php endif; ?>
			<?php
		}
	}

 ?>