<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$devotionTitle = $_POST['devotionTitle'];
		$bibleVerse = $_POST['bibleVerse'];
		$bibleVerseMessage = $_POST['bibleVerseMessage'];
		$devotionMessage = $_POST['devotionMessage'];
		$devotionPrayer = $_POST['devotionPrayer'];
		$messageDate = $_POST['messageDate'];
		$devotionWriter = $_POST['devotionWriter'];

		$sql = "UPDATE devotions SET devotion_title = '$devotionTitle', bible_verse = '$bibleVerse', bible_verse_message = '$bibleVerseMessage', 
		devotion_message = '$devotionMessage', 
		devotion_prayer = '$devotionPrayer', message_date = '$messageDate', devotion_writer = '$devotionWriter' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Devotion updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: devotions.php');

?>