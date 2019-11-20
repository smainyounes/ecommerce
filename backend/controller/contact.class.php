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

		public function getaddress()
		{
			# code...
		}

		public function getnumber()
		{
			# code...
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