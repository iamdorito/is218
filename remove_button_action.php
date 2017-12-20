<?php


require "db.php";
session_start();

$id = $_GET['id'];
$sql = "DELETE FROM todos WHERE id='$id'";
runQuery($sql);
header('Location: index.php');	

?>