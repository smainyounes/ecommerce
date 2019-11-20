<?php 

	/**
	 * category page in the admin panel
	 */
	class view_category
	{
		
		private $category;

		function __construct()
		{
			$this->category = new controller_category();
		}

		public function loadpage()
		{
			$this->category->test();
		}
	}

 ?>