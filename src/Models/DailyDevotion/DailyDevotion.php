<?php

namespace App\Models\DailyDevotion;
use App\Configuration\Database;

class DailyDevotion
{

    private $database_connection;
    private $table = 'devotions';


    private $bible_verse;
    private $devotion_title;
    private $message_date;
    private $devotion_message;
    private $devotion_prayer;
    private $devotion_writer;
    private $creation_date;


    public function __construct()
    {
        $database = new Database();
        $this->database_connection = $database->connect();
    }

    public function get_past_devotion_by_month()
    {
        try {
            $current_datetime = date('Y-m-d');
            $query = 'SELECT * FROM ' . $this->table . ' WHERE YEAR(message_date) = YEAR(:current_datetime) AND message_date <  :current_datetime ORDER BY message_date ASC';

            $statement = $this->database_connection->prepare($query);
            $statement->bindValue(':current_datetime', $current_datetime);
            $statement->execute();
            $devotions = $statement->fetchAll(\PDO::FETCH_ASSOC);

            $grouped_devotions = [];
            foreach ($devotions as $devotion) {
                $monthNumber = date('n', strtotime($devotion['message_date']));
                $grouped_devotions[$monthNumber][] = [
                    'id' => $devotion['id'],
                    'title' => $devotion['devotion_title'],
                    'date' => $devotion['message_date'],
                ];
            }

            return $grouped_devotions;
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function get_todays_devotion()
    {
        try {
            $today_datetime = date('Y-m-d');
            $query = 'SELECT * FROM ' . $this->table . ' WHERE DATE(message_date) = :today_date';
            $statement = $this->database_connection->prepare($query);
            $statement->bindValue(':today_date', $today_datetime);
            $statement->execute();
            $devotion = $statement->fetch(\PDO::FETCH_ASSOC);

            return $devotion;
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function get_specific_devotion($devotion_date)
    {
        try {

            $query = 'SELECT * FROM ' . $this->table . ' WHERE DATE(message_date) = DATE(:devotion_date) AND message_date <=  NOW() ';
            $statement = $this->database_connection->prepare($query);
            $statement->bindValue(':devotion_date', $devotion_date);
            $statement->execute();

            $devotion = $statement->fetch(\PDO::FETCH_ASSOC);

            return $devotion;
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}
