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




public function check_login($username,$email,$password)
{
    $passhashed=sha1($password);
    
       $username_exixts= $this->table->where('uname',"=",$username)->exists();
       $email_exixts= $this->table->where('email',"=",$email)->exists();
       $password_exixts= $this->table->where('pass',"=",$passhashed)->exists();
       if ($username_exixts &&$email_exixts &&$password_exixts ){
           return true;
        
       }else{
           return false;
       }

  
}
}