<?php
use Illuminate\Database\Capsule\Manager as Database;

class Connect
{
    public function __construct()
    {
        $this->database = new Database;

        $this->database->addConnection([
            "driver" => Driver,
            "host" => Host,
            "database" => Database,
            "username" => Username,
            "password" => Password,
        ]);
        
        $this->database->setAsGlobal();
        $this->database->bootEloquent();
    }
public function data($table)
{
    return Database::table($table);
    
}

}