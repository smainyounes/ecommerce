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
			$this->product->test();
		}
	}

 ?>