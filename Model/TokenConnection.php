<?php

class TokenConnection
{
    public  Connect $connection;
    public $table;

    public function __construct()
    {
        $this->connection = new Connect;
        $this->table = $this->connection->data('token');
    }

    // public function login($name, $pass)
    // {
    //     return $this->table
    //         ->select('uname', 'email')
    //         ->get();
    // }
    // public function getall()
    // {
    //     return $this->table->select('uname', 'email')
    //         ->get();
    // }

    //insert token
    public function insert_data($uid, $new_token)
    {
        $tokenhashed = sha1($new_token);
        $token = (['id' => $uid, 'rememberme' => $tokenhashed]);

        try {
            $this->table->insert($token);

        } catch (\PDOEXCEPTION$th) {
            echo $th->getMessage();
        }
    }

    //get userid using current token
    public function get_id($current_token)
    {
        $tokenhashed = sha1($current_token);
        $opposite_id = $this->table->where('rememberme', "=", $tokenhashed)->value('id');
        return $opposite_id;
    }

    //update new token
    public function update_data($id, $new_token)
    {
        $tokenhashed = sha1($new_token);
        $this->table->where('id', $id)->update(['rememberme' => "$tokenhashed"]);
    }

    //remove record using token and primary key of table
    public function delete_record($current_token)
    {
        $primary_key = $this->table->where('rememberme', "=", (sha1($current_token)))->value('tid');
        $deleted_item_no = $this->table->where('tid', $primary_key)->delete();
        return $deleted_item_no;
    }
}