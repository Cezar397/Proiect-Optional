<?php

/**
 * 
 	Creator: Catarau Cezar-Iulian
	Data: 15/01/2019
	
 */
class Connect_To_Database
{
	private $db_host;
	private $db_user;
	private $db_password;
	private $db_name;

	public function __construct()
	{
		$this->db_host = "localhost";
		$this->db_user = "root";
		$this->db_password = "";
		$this->db_name = "chatsite";
	}

	private function make_connect()
	{
		$connect = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);

		if($connect->connect_error)
			return 0;
		
		return $connect;
	}

	public function return_connect()
	{
		if($this->make_connect())
			return $this->make_connect();
		return 0;
	}
}
		
	$reg = new Connect_To_Database;

	$GLOBALS["dbstatus"] = $reg->return_connect();
?>