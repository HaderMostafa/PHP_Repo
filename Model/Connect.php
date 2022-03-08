<?php
use Illuminate\Database\Capsule\Manager as Database;

class Connect
{

    // to connect to DB
    public static function connectDatabase()
    {
        $database = new Database;

        $database->addConnection([
            "driver" => Driver,
            "host" => Host,
            "database" => Database,
            "username" => Username,
            "password" => Password,
        ]);
        
        $database->setAsGlobal();
        $database->bootEloquent();

    }

    //INSERT TO DATABASE FROM PAYMENT PAGE
    public static function get_login_data()
    {
        $obj = Database::table("user")->get();
        var_dump($obj);
    }

}