<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$fullName = $_POST['fullName'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		$userType = $_POST['userType'];

		$sql = "INSERT INTO users (password, full_name, email, photo, user_type, phone, creation_date) VALUES ( '$password', '$fullName', '$email', '$filename', '$userType', '$phone', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'User added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>