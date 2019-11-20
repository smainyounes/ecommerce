<?php 

	/**
	 * product list in the admin panel
	 */
	class view_prodlist
	{

		private $product;


		function __construct()
		{
			$this->product = new controller_product();
		}

		public function loadpage()
		{
			$this->product->test();
		}

	}

 ?>