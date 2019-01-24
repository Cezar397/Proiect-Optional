<?php
/**
 * 
 	Creator: Catarau Cezar-Iulian
	Data: 15/01/2019
 */
	session_start();
	require("dbconnect.php");

class Login
{
	private $user_Email;
	private $user_Password;

	public function __construct()
	{
		$this->user_Email = $_POST["email"];
		$this->user_Password = $_POST["password"];
	}

	public function check_inputs()
	{
		if((empty($_POST["email"])) || (!isset($_POST["email"])))
			return 0;

		if((empty($_POST["password"])) || (!isset($_POST["password"])))
			return 0;

		return 1;
	}

	public function check_email_exist()
	{
		$select = "SELECT Email FROM accounts";
		$result = $GLOBALS["dbstatus"]->query($select);

		while($row = $result->fetch_assoc())
			if($row["Email"] == $this->user_Email)
				return 1;
		return 0;
	}

	public function check_password()
	{
		$select = "SELECT Password FROM accounts WHERE Email = '$this->user_Email'";
		$result = $GLOBALS["dbstatus"]->query($select);
		$row = $result->fetch_assoc();

		if(password_verify($this->user_Password, $row["Password"]))
			return 1;
		return 0;
	}	


	public function login()
	{
		if($this->check_inputs())
		{
			if($this->check_email_exist())
			{
				if($this->check_password())
				{
					$select = "SELECT ID FROM accounts WHERE Email = '$this->user_Email'";
					$result = $GLOBALS["dbstatus"]->query($select);
					$row = $result->fetch_assoc();

					$_SESSION["ID"] = $row["ID"]; 

					header("Location: ../../index.php?status=success");
					exit(0);	
				}
				else
				{
					header("Location: ../../login.php?status=parolagresita");
					exit(0);
				}
			}
			else
			{
				header("Location: ../../login.php?status=nuexistaemail");
				exit(0);
			}
		}
		else
		{
			header("Location: ../../login.php?status=campuriobligatorii");
			exit(0);
		}
	}
}

$debuggg = new Login;

echo $debuggg->login();

?>