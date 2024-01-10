<?php
namespace App\Configuration;


class Settings{
    private $table = 'settings';
    private $settings;

  public function __construct(){
        $database = new Database();
        $database_connection = $database->connect();

        $query = 'SELECT name, value From '.$this->table.'';
        $statement = $database_connection->prepare($query);
        $statement->execute();

        $settings = $statement->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($settings as $setting) {
            $this->settings[$setting['name']] = $setting['value'];
        }
  }
 
  public function get_setting($setting){
   return $this->settings[$setting];
  }


}
