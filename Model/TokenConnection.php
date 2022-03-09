<?php

class TokenConnection
{
    public Connect $connection;
    public  $table;


    public function __construct()
    {
       $this->connection = new Connect;
       $this->table = $this->connection->data('token');
    }

public function login($name,$pass)
{
    return $this->table
    ->select('uname', 'email')
    ->get();
}
public function getall()
{
    return  $this->table->select('uname', 'email')
    ->get();
}
}