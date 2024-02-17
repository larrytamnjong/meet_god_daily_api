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
		$prayerPoint = $_POST['prayerPoint'];

		$sql = "UPDATE devotions SET devotion_title = ?, bible_verse = ?, bible_verse_message = ?, 
        devotion_message = ?, devotion_prayer = ?, message_date = ?, devotion_writer = ?, prayer_point = ?
        WHERE id = ?";

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssssssi", $devotionTitle, $bibleVerse, $bibleVerseMessage, $devotionMessage, $devotionPrayer, $messageDate, $devotionWriter, $prayerPoint, $id);

		if ($stmt->execute()) {
			$_SESSION['success'] = 'Devotion updated successfully';
		} else {
			$_SESSION['error'] = $stmt->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: devotions.php');

?>