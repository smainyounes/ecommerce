<?php 

	/**
	 * message view in the admin panel
	 */
	class view_message
	{
		
		private $message;

		function __construct()
		{
			$this->message = new controller_message();
		}

		public function loadpage()
		{
			$this->message->test();
		}

	}

 ?>