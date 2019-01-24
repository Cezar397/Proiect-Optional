<?php
/**
 * 
 	Creator: Catarau Cezar-Iulian
	Data: 15/01/2019
 */

require('dbconnect.php');

session_start();

class Message
{
	public $Message;

	function __construct()
	{
		$this->Message = htmlentities($_POST["message"]);
	}

	public function Upload_Message()
	{
		$time = date("Y/m/d");
		$id = $_SESSION["ID"];

		$select_name = "SELECT ChatName, Name FROM accounts WHERE ID = '$id'";
		$result = $GLOBALS["dbstatus"]->query($select_name);
		$row = $result->fetch_assoc();

		$chatname = $row["ChatName"];
		$name = $row["Name"];

		if(empty($row["ChatName"]))
			$insert = "INSERT INTO chat(Date_M, Name, Message) VALUES('$time', '$name', '$this->Message')";
		else
			$insert = "INSERT INTO chat(Date_M, Name, Message) VALUES('$time', '$chatname', '$this->Message')";
		$result = $GLOBALS["dbstatus"]->query($insert);
		header("Location: ../../");
		exit(0);
	} 
}

$upload = new Message;

$upload->Upload_Message();

?>