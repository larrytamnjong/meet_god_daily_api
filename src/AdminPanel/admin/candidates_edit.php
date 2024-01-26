<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
		

		$sql = "UPDATE payments SET status = '$status' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Payment Status updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>