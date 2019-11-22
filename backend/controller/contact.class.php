<?php 
	
	/**
	 * contact methods
	 */
	class controller_contact
	{
		
		private $db;
		
		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from contact controller <br>";
		}

		/**
		 * getters
		 */

		public function getinfos()
		{
			$this->db->query("SELECT * FROM contact");
			return $this->db->single();
		}

		public function getaddress()
		{
			$this->db->query("SELECT address FROM contact");
			$address = $this->db->single();
			return $address->address;
		}

		public function getnumber()
		{
			$this->db->query("SELECT tel FROM contact");
			$tel = $this->db->single();
			return $tel->tel;
		}

		public function getemail()
		{
			$this->db->query("SELECT email FROM contact");
			$email = $this->db->single();
			return $email->email;
		}

		/**
		 * setters
		 */

		public function changeaddress()
		{
			# code...
		}

		public function changenumber()
		{
			# code...
		}


	}


 ?>