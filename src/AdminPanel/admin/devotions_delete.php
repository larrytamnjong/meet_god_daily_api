<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM devotions WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Devotion deleted successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Select devotion to delete first';
	}

	header('location: devotions.php');
	
?>