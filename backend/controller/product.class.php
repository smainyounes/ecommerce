<?php 

	/**
	 * all products related methods are here
	 */

	class controller_Product{
		private $db;

		function __construct()
		{
			$this->db = new model_database();
		}

		/*
		 * getter methods 
		 */
		public function getallprod()
		{
			# code...
		}

		public function getbycateg($id_categ)
		{
			# code...
		}

		public function getsingle($id_prod)
		{
			# code...
		}

		/*
		 * setters methods 
		 */

		public function insert()
		{
			# code...
		}

		public function delete($id_prod)
		{
			# code...
		}

		public function edit($id_prod)
		{
			# code...
		}

	}


 ?>