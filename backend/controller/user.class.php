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

		public function getuserinfos()
		{
			$this->db->query("SELECT * FROM users");
			return $this->db->single();
		}

		public function getcontactinfos()
		{
			$this->db->query("SELECT * FROM contact");
			return $this->db->single();
		}

		public function changeusername()
		{
			$this->db->query("UPDATE users SET username = :username WHERE id = :id");
			$this->db->bind(":username",strip_tags($_POST['username']));
			$this->db->bind(":id", 1);

			try {
				$this->db->execute();
				return true;
			} catch (Exception $e) {
				echo $e;
				return false;
			}

		}

		public function changeinfos()
		{
			$this->db->query("UPDATE contact SET tel = :tel, email = :email, address = :address");
			$this->db->bind(":tel", strip_tags($_POST['tel']));
			$this->db->bind(":email", strip_tags($_POST['email']));
			$this->db->bind(":address", strip_tags($_POST['address']));

			try {
				$this->db->execute();
				return true;
			} catch (Exception $e) {
				echo $e;
				return false;
			}

		}

		public function changepassword()
		{
			$this->db->query("SELECT password FROM users WHERE id = :id");
			$this->db->bind(":id",$_SESSION['user']);

			$data = $this->db->single();

			if($data->password === strip_tags($_POST['oldpass'])){
				// password confirmed
				if (strip_tags($_POST['pass1']) === strip_tags($_POST['pass2'])) {
					$this->db->query("UPDATE users SET password = :pass WHERE id = :id");
					$this->db->bind(":pass",$_POST['pass1']);
					$this->db->bind(":id",$_SESSION['user']);
					try {
						$this->db->execute();
						return true;
					} catch (Exception $e) {
						echo $e;
						return false;
					}
				}
			}
			return false;
		}

		public function logout()
		{
			# code...
		}

	}

 ?>