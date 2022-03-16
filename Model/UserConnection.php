<?php

class UserConnection
{
    public Connect $connection;
    public $table;

    public function __construct()
    {
        $this->connection = new Connect;
        $this->table = $this->connection->data('user');
    }

    public function insert_data($username, $email, $password)
    {
        $passhashed = sha1($password);
        $user = (['uname' => $username, 'email' => $email, 'pass' => $passhashed]);

        try {
            $this->table->insert($user);

        } catch (\PDOEXCEPTION$th) {
            echo $th->getMessage();
        }
    }

    public function check_login($username, $email, $password)
    {
        $passhashed = sha1($password);
        $username_exixts = $this->table->where('uname', "=", $username)->exists();
        $email_exixts = $this->table->where('email', "=", $email)->exists();
        $password_exixts = $this->table->where('pass', "=", $passhashed)->exists();
        if ($username_exixts && $email_exixts && $password_exixts) {
            return true;

        } else {
            return false;
        }
    }

    public function select($col, $value, $equval)
    {
        return $this->table->where($col, "=", $value)->value($equval);
    }

// checks if email is used before
    public function check_used_before($email)
    {
        $email_exists = $this->table->where('email', "=", $email)->exists();
        if ($email_exists == true) {
            return true;
        } else {
            return false;
        }
    }

    public function get_data($email)
    {
        $opposite_id = $this->table->where('email', "=", $email)->value('uid');
        return $opposite_id;
    }

    public function update_data($id, $email, $password)
    {
        $passhashed = sha1($password);
        $this->table->where('uid', $id)->update(['email' => "$email"]);
        $this->table->where('uid', $id)->update(['pass' => $passhashed]);
    }

    public function get_email($id)
    {
        $opposite_email = $this->table->where('uid', "=", $id)->value('email');
        return $opposite_email;
    }
}