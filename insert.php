<?php
session_start();
require "db.php";
$email = $_SESSION["email"];
$message = $_POST["message"];
$dueDate = $_POST["dueDate"];

echo $email;
echo $message;
echo $duedate;


$sql = "INSERT INTO todos(owneremail,createddate,duedate,message)
		VALUES('$email','GETDATE()','$dueDate','$message')";
runQuery($sql);


header('Location: userToDoList.php');

?>