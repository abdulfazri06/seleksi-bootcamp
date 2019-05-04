<?php
	require_once 'class.php';
	
	if(ISSET($_POST['save'])){	
		$name = $_POST['name'];
	      $earned_vote  = $_POST['earned_vote'];
		$conn = new db_class();
		$conn->create($name, $earned_vote);
		header('location: index.php');
	}	
	
?>