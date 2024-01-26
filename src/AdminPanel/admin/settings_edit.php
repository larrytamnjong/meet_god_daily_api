<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$value = $_POST['value'];
		

		$sql = "UPDATE settings SET value = '$value' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Settings updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: settings.php');

?>