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



public function update_order($userid,$new_date,$new_count){

    $this->table ->where('userid', $userid)->update(['date' => "$new_date" , 'count' => "$new_count"]);        
}



public function get_count($userid)
    {
        $count = $this->table->where('userid', "=", $userid)->value('count');
        return $count;
    }



    public function get_userId($userid)
    {
        $excit_userid = $this->table->where('userid', "=", $userid)->value('userid');
        return $excit_userid;
    }   


}