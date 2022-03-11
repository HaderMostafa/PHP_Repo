<?php

class OrdersConnection
{
    public Connect $connection;
    public  $table;


    public function __construct()
    {
       $this->connection = new Connect;
       $this->table = $this->connection->data('orders');
    }

// public function login($name,$pass)
// {
//     return $this->table
//     ->select('uname', 'email')
//     ->get();
// }
// public function getall()
// {
//     return  $this->table->select('uname', 'email')
//     ->get();
// }



public function insert_order($userid,$productid,$date,$count)
{
    $order = (['userid' => $userid,'productid' => $productid, 'date'=> $date,'count' => $count]);

    try {
        $this->table->insert($order);

    } catch (\PDOEXCEPTION $th) {
        echo $th->getMessage();
    }
}
}