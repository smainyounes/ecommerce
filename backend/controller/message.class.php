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
			# code...
		}

		public function deletemsg($id_msg)
		{
			# code...
		}


	}

 ?>