<?php
require "db.php";
session_start();
// $email = $_SESSION["email"];
$id = $_GET['id'];
$sql = "DELETE FROM todos WHERE id='$id'";
runQuery($sql);
header('Location: userToDoList.php');	

?>