<?php 

	/**
	 * all messages methods
	 */
	class controller_message
	{
		
		private $db;

		function __construct()
		{
			$this->db = new model_database();
		}

		public function test()
		{
			echo "test from message controller <br>";
		}

		/**
		 * getters
		 */

		public function getall()
		{
			# code...
		}

		public function getsingle($id_msg)
		{
			# code...
		}

		/**
		 * setters
		 */

		public function newmsg()
		{
			$this->db->query("INSERT INTO `messages`(`nom_complet`, `tel`, `message`) VALUES (:name, :tel, :msg)");
			$this->db->bind(":name", strip_tags($_POST['fullname']));
			$this->db->bind(":tel", strip_tags($_POST['number']));
			$this->db->bind(":msg", strip_tags($_POST['message']));

			try {
				$this->db->execute();
				return true;
			} catch (Exception $e) {
				return false;
			}

		}

		public function deletemsg($id_msg)
		{
			# code...
		}


	}

 ?>