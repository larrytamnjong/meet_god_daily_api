<?php 
require_once '../../../vendor/autoload.php';
use App\Configuration\Database;

$database = new Database();
$database_connection = $database->connect();

$dateTime = DateTime::createFromFormat('m/d/Y h:i A', $_POST["messageDate"]);


$devotionTitle = $_POST["devotionTitle"];
$devotionWriter = $_POST["devotionWriter"];
$messageDate  = $dateTime->format('Y-m-d H:i:s');
$bibleVerse = $_POST["bibleVerse"];
$bibleVerseMessage = $_POST["bibleVerseMessage"];
$devotionMessage = $_POST["devotionMessage"];
$devotionPrayer = $_POST["devotionPrayer"];

$query = 'INSERT INTO devotions (devotion_title, devotion_writer, message_date, bible_verse, bible_verse_message, devotion_message, devotion_prayer,creation_date)
VALUES (:devotionTitle, :devotionWriter, :messageDate, :bibleVerse, :bibleVerseMessage, :devotionMessage, :devotionPrayer, NOW())';

$statement = $database_connection->prepare($query);
        
$statement->bindParam(':devotionTitle', $devotionTitle);
$statement->bindParam(':devotionWriter', $devotionWriter);
$statement->bindParam(':messageDate', $messageDate);
$statement->bindParam(':bibleVerse', $bibleVerse);
$statement->bindParam(':bibleVerseMessage', $bibleVerseMessage);
$statement->bindParam(':devotionMessage', $devotionMessage);
$statement->bindParam(':devotionPrayer', $devotionPrayer);


if( $statement->execute()){
    echo json_encode(true);
  
}else{

    echo json_encode($result);
}
