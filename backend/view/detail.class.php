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
			?>

			<div id="page-content">
				<div class="container-fluid mt-4 px-5">
					<div class="row">
						<div class="col-md-6 p-0 border mb-2">
							<div class="main-image">
							  <img src="img/exemples/9.jpg" alt="Placeholder" class="custom">
							</div>
							<div class="row pl-2 thumbnails">
								<div class="col-2 p-2">
									<a href="img/exemples/9.jpg"><img src="img/exemples/9.jpg" alt="Thumbnails"></a>
								</div>
								<div class="col-2 p-2">
									<a href="img/exemples/10.jpg"><img src="img/exemples/10.jpg" alt="Thumbnails"></a>
								</div>
								<div class="col-2 p-2">
									<a href="img/exemples/10.jpg"><img src="img/exemples/10.jpg" alt="Thumbnails"></a>
								</div>
								<div class="col-2 p-2">
									<a href="img/exemples/10.jpg"><img src="img/exemples/10.jpg" alt="Thumbnails"></a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h2>Item one</h2>
							<div class="h4">Prix : 12000da</div>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</div>
					</div>
				</div>
			</div>
			
			<?php
		}
	}

 ?>