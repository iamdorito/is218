<?php
session_start();
require "db.php";
$email = $_POST["email"];
$_SESSION["email"] = $email;
$password = $_POST["password"];

$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){	
	$sql = "SELECT password FROM accounts WHERE email='$email'";
	$pw = runQuery($sql);
	
	foreach($pw as $x){
		$pw = $x["password"];
	}

	
	if($password == $pw){
		$sql = "SELECT fname,lname FROM accounts WHERE email='$email'";
		$results = runQuery($sql);

		foreach($results as $row){
			echo $row["fname"] . " " . $row["lname"];
			//Testing session variables
			$_SESSION["userFirstName"] = $row["fname"];
			$_SESSION["userLastName"] = $row["lname"];

			header("Location: userToDoList.php");
			
			
		}			
	}
	
	else{
		header("Location: error_email.php");		
	}

			
}	
else{
		header("Location: error.php");
}
?>
