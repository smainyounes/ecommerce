<?php 

	/**
	 * all products related methods are here
	 */

	class controller_product{
		private $db;

		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from product controller <br>";
		}

		/*
		 * getter methods 
		 */
		public function getallprod()
		{
			$sql = "SELECT *
						FROM products LEFT JOIN images
						ON products.id_prod = images.id_product
						WHERE NOT EXISTS(
						    SELECT * 
						    FROM images as T2BIS -- just an alias table
						    WHERE T2BIS.id_product = products.id_prod -- usual join
						    AND images.id_img > T2BIS.id_img -- change operator to take the last instead of the first
						)";
			$this->db->query($sql);
			return $this->db->resultSet();
		}

		public function getbycateg($id_categ)
		{
			$sql = "SELECT *
						FROM products, images
						WHERE products.id_prod = images.id_product
						AND id_category = :id
						AND NOT EXISTS(
						    SELECT * 
						    FROM images as T2BIS -- just an alias table
						    WHERE T2BIS.id_product = products.id_prod -- usual join
						    AND images.id_img > T2BIS.id_img -- change operator to take the last instead of the first
						)";
			$this->db->query($sql);
			$this->db->bind(":id", strip_tags($id_categ));
			return $this->db->resultSet();
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