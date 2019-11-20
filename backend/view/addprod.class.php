<?php 

	/**
	 * adding or edit a product
	 */
	class view_addprod
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