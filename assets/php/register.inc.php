<?php
/**
 * 
 	Creator: Catarau Cezar-Iulian
	Data: 16/01/2019
 */
	require("dbconnect.php");

class Register
{

	private $user_Name;
	private $user_Password;
	private $user_RePassword;
	private $user_Email;
	private $password_cript;

	public function check_inputs()
	{
		if((empty($_POST["name"])) || (!isset($_POST["name"])))
			return 0;

		if((empty($_POST["email"])) || (!isset($_POST["email"])))
			return 0;

		if((empty($_POST["password"])) || (!isset($_POST["password"])))
			return 0;

		if((empty($_POST["repassword"])) || (!isset($_POST["repassword"])))
			return 0;

		return 1;
	}

	public function __construct()
	{
		
			$this->user_Name = $_POST["name"];
			$this->user_Email = trim($_POST["email"]);
			$this->user_Password = $_POST["password"];
			$this->user_RePassword = $_POST["repassword"];
	}

	public function check_rep_email()
	{
		$select = "SELECT Email FROM accounts";
		$result = $GLOBALS["dbstatus"]->query($select);

		while($row = $result->fetch_assoc())
			if(strcmp($row["Email"], $this->user_Email) == 0)
				return 0;
		return 1;
	}

	public function check_password()
	{
		if(strcmp($this->user_Password, $this->user_RePassword) == 0)
		{
			$this->password_cript = password_hash($this->user_Password, PASSWORD_DEFAULT);
			return 1;
		}

		return 0;
	}

	public function register()
	{
		if($this->check_inputs())
		{
			if($this->check_password())
			{
				if($this->check_rep_email())
				{
				$insert = "INSERT INTO accounts(Name, Email, Password, ChatName) VALUES('$this->user_Name', '$this->user_Email', '$this->password_cript', '$this->user_Name')";

					$result = $GLOBALS["dbstatus"]->query($insert);

					if($result)
					{
						header("Location: ../../login.php?staus=success");
						exit(0);
					}
					else
					{
						header("Location: ../../register.php?status=error");
						exit(0);
					}
				}
				else
				{
					header("Location: ../../register.php?status=repemail");
				exit(0);
				}
			}
			else
			{
				header("Location: ../../register.php?status=passerror");
				exit(0);
			}
		}
		else
		{
			header("Location: ../../register.php?status=campuriobligatorii");
			exit(0);
		}
	}
}

$debugg = new Register;


echo $debugg->register();
?>