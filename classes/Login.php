<?php
	//class for login
	class Login{
		private $servername = NULL;
		private $dbname = NULL;
		private $username = NULL;
		private $currentUser;
		private $password = NULL;
		private $DSN = NULL;
		private $connect = NULL;
		private $DBH = NULL; //DBH is database handle
		private $flag = false;

	function __construct($servername,$username, $password,$dbname){//constructor, that initialiase info for connect to server
		$this->servername = $servername;
		$this->username = $username;
		$this->password = $password;
		$this->dbname = $dbname;

	}
	function connectDB(){ //function for connect to db
		$this->DSN = "mysql:host=$this->servername; dbname=$this->dbname";

		try{
		 $this->DBH = new PDO($this->DSN, $this->username,$this->password);
		 }
		 catch (PDOException $e){
			echo $e->getMessage();
		 }
	}
	function checkLogin($email,$pass){//function for check email and password
		$tmpDBH = $this->DBH;
		$STH = $tmpDBH->query('SELECT email, password FROM users');//STH is Statement Handle
		$STH->setFetchMode(PDO::FETCH_ASSOC); //set fetch mode
		$flag = NULL;
		while ($row=$STH->fetch()) {//checking login and pass for each row
			if($row['email']==$email && $row['password']==$pass){ //checking
				$this->flag=true; //user did login
				$this->currentUser = $email;//who did login
				session_start();//start session. LOL
				$_SESSION['username'] = $email;
				echo "that's work!";
			} else {
				$this->flag = false;
				echo "faiil";
			}
		}
	}
}


?>
