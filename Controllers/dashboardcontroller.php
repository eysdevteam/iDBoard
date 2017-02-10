<?php namespace Controllers;

	use Models\Dashboard;
	
	class dashboardcontroller {
		private $dashboard;
		
		public function __construct() {
			$this->dashboard = new Dashboard();
		}
		public function index() {
			$this->dashboard->loginReturn();
		}

		


	}

	