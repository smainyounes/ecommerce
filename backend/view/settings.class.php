<?php 

	/**
	 * settings view in the admin panel
	 */
	class view_settings
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