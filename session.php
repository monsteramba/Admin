<?php
	session_start();
	if (isset($_SESSION['voters_id'])){
		$voters_id = $_SESSION['voters_id'];
		$firstname = $_SESSION['firstname'];
		$lastname = $_SESSION['lastname'];
	}
	else{
		header("Location:../../");
	}
?>