<?php

session_start();
require "db.php";

$email = $_POST["email"];
$sql = "SELECT email FROM accounts WHERE email='$email'";
if(runQuery($sql)==true){
	echo "That email already exists, please try again";
}
else{
	$sql = "INSERT INTO accounts(id,fname,lname,email,phone,birthday,gender,password)
		VALUES(id,'" . $_POST["firstName"] . "','" . $_POST["lastName"] . "','" . $_POST["email"] . "',
				'" . $_POST["phoneNumber"] . "','" . $_POST["birthday"] . "','" . $_POST["gender"] . "','" . $_POST["password"] . "')";
	runQuery($sql);
	echo $_POST["firstName"] . " " . $_POST["lastName"] . " is registered";
	$_SESSION["email"] = $_POST["email"];
}

header("Location: form.php");

?>

<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
		<body>
			<a href="https://web.njit.edu/~dc267/finalproject//form.php">Go Back to Home Page</a>
		</body>
	</html>
