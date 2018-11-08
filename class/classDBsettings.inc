<?php
	class dbSettings {

		public $db_server_name;
		public $db_username;
		public $db_password;
		public $db_name;

		public function getSettings() {

			$this->db_server_name = "localhost";
			$this->db_username = "root";
			$this->db_password = "root";
			$this->db_name = "Canister";

		}

	}

?>