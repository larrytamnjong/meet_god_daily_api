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
		$prayerPoint = $_POST['prayerPoint'];
		
		
		$sql = "INSERT INTO devotions (devotion_title, bible_verse, bible_verse_message, devotion_message, devotion_prayer, message_date, devotion_writer, prayer_point, creation_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?,?, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssssss", $devotionTitle, $bibleVerse, $bibleVerseMessage, $devotionMessage, $devotionPrayer, $messageDate, $devotionWriter, $prayerPoint);
		if($stmt->execute()){
			$_SESSION['success'] = 'Devotion added successfully';
			$stmt->close();
		}
		else{
			$_SESSION['error'] = $conn->error;
			$stmt->close();
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: devotions.php');
?>