<?php 
	/**
	 * home view
	 */
	class view_home
	{

		private $product;
		private $category;

		function __construct()
		{
			$this->product = new controller_product();
			$this->category = new controller_category();
		}

		public function loadpage()
		{
			$this->product->test();
			$this->category->test();
		}


	}


 ?>