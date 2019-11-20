<?php 
	
	/**
	 * contact view
	 */
	class view_contact
	{
		
		private $contact;

		function __construct()
		{
			$this->contact = new controller_contact();
		}

		public function loadpage()
		{
			$this->contact->test();
		}

	}
	
 ?>