<?php 
	/**
	 *  all category methods are here
	 */
	class controller_category 
	{
		private $db;
		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from category controller\n";
		}

		/**
		 *  getters
		 */

		public function getall()
		{
			# code...
		}

		/**
		 *  setters
		 */

		public function addnew($name)
		{
			# code...
		}

		public function delete($id_categ)
		{
			# code...
		}

	}



 ?>