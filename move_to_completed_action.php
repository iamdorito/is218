<?php
require "db.php";
session_start();
// $email = $_SESSION["email"];
$id = $_GET['id'];
$sql = "UPDATE todos
		SET isdone = 1
		WHERE id='$id'";
runQuery($sql);
header('Location: userToDoList.php');	

?>