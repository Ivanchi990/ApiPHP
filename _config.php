<?php
	function db_o ($forReports) {
		return $forReports ? array(
			'servername' => "127.0.0.1",
			'username' => "reports",
			'password' => "",
			'dbname' => "afs_dev",
			'res' => null
		) : array(
			'servername' => "127.0.0.1",
			'username' => "root",
			'password' => "",
			'dbname' => "afs_dev",
			'res' => null
		);
	}

	function db_us ($forReports) {
		return $forReports ? array(
			'servername' => "127.0.0.1",
			'username' => "reports",
			'password' => "",
			'dbname' => "afs_dev_us",
			'res' => null
		) : array(
			'servername' => "127.0.0.1",
			'username' => "root",
			'password' => "",
			'dbname' => "afs_dev_us",
			'res' => null
		);
	}

	function app_url () {
		return 'http://localhost:3000';
	}

?>