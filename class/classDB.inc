<?php
	require('classDBsettings.inc');

	class DB extends dbSettings {

		public $db_server_name;
		public $db_username;
		public $db_password;
		public $db_name;

		public function __construct() {
			dbSettings::getSettings();
		}

		public function connect() {

			try {
				$pdo = new PDO("mysql:host=$this->db_server_name; dbname=$this->db_name", $this->db_username, $this->db_password);	
				print "Połączono z bazą!<br/>";
			} catch(PDOException $e) {
				print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
    			die();
			}
			
		}
	}
?>