<?php 

	/**
	 * all user methods
	 */
	class controller_user
	{
		private $db;
		
		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from user controller <br>";
		}

		public function login()
		{
			$this->db->query("SELECT * FROM users WHERE username = :name");
			$this->db->bind(":name", strip_tags($_POST['username']));

			try {
				$result = $this->db->single();
				if ($result) {
					if($result->password === strip_tags($_POST['password'])){
						return true;
					}
				}
				
			} catch (Exception $e) {
				return false;
			}
			return false;

		}

		public function changeusername()
		{
			# code...
		}

		public function changepassword()
		{
			# code...
		}

		public function logout()
		{
			# code...
		}

	}

 ?>