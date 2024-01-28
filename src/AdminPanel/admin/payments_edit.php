<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$status = $_POST['status'];
		

		$sql = $status == "complete" ? "UPDATE payments SET status = '$status', completion_date = NOW() WHERE id = '$id'" : "UPDATE payments SET status = '$status', completion_date = null WHERE id = '$id'";
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

	header('location: payments.php');

?>