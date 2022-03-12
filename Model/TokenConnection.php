<?php

class TokenConnection
{
    public Connect $connection;
    public $table;

    public function __construct()
    {
        $this->connection = new Connect;
        $this->table = $this->connection->data('token');
    }

    public function login($name, $pass)
    {
        return $this->table
            ->select('uname', 'email')
            ->get();
    }
    public function getall()
    {
        return $this->table->select('uname', 'email')
            ->get();
    }

    //******************************************************************************
    public function insert_data($uid, $token)
    {
        $tokenhashed = sha1($token);
        $token = (['id' => $uid, 'rememberme' => $tokenhashed]);

        try {
            $this->table->insert($token);

        } catch (\PDOEXCEPTION$th) {
            echo $th->getMessage();
        }
    }
    //********************************************************************************

}