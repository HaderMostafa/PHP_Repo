<?php

class UserConnection
{
    public Connect $connection;
    public  $table;


    public function __construct()
    {
       $this->connection = new Connect;
       $this->table = $this->connection->data('user');
    }

public function insert_data($username,$email,$password)
{
    $passhashed=sha1($password);
    $user = (['uname' => $username,'email' => $email, 'pass'=> $passhashed]);

    try {
        $this->table->insert($user);

    } catch (\PDOEXCEPTION $th) {
        echo $th->getMessage();
    }
}
}