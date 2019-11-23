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
			echo "test from category controller <br>";
		}

		/**
		 *  getters
		 */

		public function getall()
		{
			$this->db->query("SELECT * FROM category");
			return $this->db->resultSet();
		}

		/**
		 *  setters
		 */

		public function addnew($name)
		{
			$this->db->query("INSERT INTO category(nom_category) VALUES(:name)");
			$this->db->bind(":name", strip_tags($name));

			try {
				$this->db->execute();
				return true;
			} catch (Exception $e) {
				echo $e."<br>";
				return false;
			}

		}

		public function delete($id_categ)
		{
			# code...
		}

	}



 ?>