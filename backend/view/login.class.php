<?php 

	/**
	 * admin login view
	 */
	class view_login
	{
		
		private $user;

		function __construct()
		{
			$this->user = new controller_user();
		}

		public function loadpage()
		{
			$this->user->test();
		}

	}

 ?>