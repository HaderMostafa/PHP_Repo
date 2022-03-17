<?php

class ProductConnection
{
    public Connect $connection;
    public  $table;


    public function __construct()
    {
       $this->connection = new Connect;
       $this->table = $this->connection->data('product');
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


public function update_product($new_fname){

    $this->table ->where('pid', 1)->update(['fname' => "$new_fname"]);            
}




public function get_data()
{
    $fname = $this->table->where('pid', "=", "1")->value('fname');
    return $fname;
}

}