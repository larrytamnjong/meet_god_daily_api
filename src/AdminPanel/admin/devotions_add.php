<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$devotionTitle = $_POST['devotionTitle'];
		$bibleVerse = $_POST['bibleVerse'];
		$bibleVerseMessage = $_POST['bibleVerseMessage'];
		$devotionMessage = $_POST['devotionMessage'];
		$devotionPrayer = $_POST['devotionPrayer'];
		$messageDate = $_POST['messageDate'];
		$devotionWriter = $_POST['devotionWriter'];
		

		// $sql = "SELECT * FROM positions ORDER BY priority DESC LIMIT 1";
		// $query = $conn->query($sql);
		// $row = $query->fetch_assoc();

		// $priority = $row['priority'] + 1;
		
		$sql = "INSERT INTO devotions (devotion_title, bible_verse, bible_verse_message, devotion_message, devotion_prayer, message_date, devotion_writer, creation_date) 
		VALUES ('$devotionTitle', '$bibleVerse', '$bibleVerseMessage','$devotionMessage', '$devotionPrayer', '$messageDate', '$devotionWriter', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Devotion added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: devotions.php');
?>