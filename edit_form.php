<?php

require "db.php";

//VARIABLES
$id = $_GET['id'];
$editTask = $_POST['editTask'];

//INPUT FORM
// echo "<form action='edit_form.php' method='POST' target='_self'>";
// echo "<input type='text' name='editTask'>";
// echo "<input type='submit' value='Edit Task'>";
// echo "</form>";



//ADD TO MESSAGE
$sql = "UPDATE todos
		SET message='$editTask'
		WHERE id='$id'";
runQuery($sql);
header('Location: index.php');
		
		

?>