<?php
session_start();
require_once "vendor/autoload.php";

if (isset($_COOKIE["remember_me"]) || isset($_SESSION['is_logged'])) {

    if (isset($_COOKIE["remember_me"])) {

        // using current token contact with db and get user id
        $token = new TokenConnection;
        $id = $token->get_id($_COOKIE["remember_me"]);
        $_SESSION['user_id'] = $id; //set variable in session

        //add userid in session and email in session >>> jump download >>>can enter edit profile >>>need variables in session
        // database and session
        $user = new UserConnection;
        $email = $user->get_email($id);
        $_SESSION['email'] = $email;

        //set new token
        $value = uniqid(time(), true); //to generate unique token
        setcookie("remember_me", $value, time() + 2 * 24 * 60 * 60, '/');

        //update token in DB
        $token = new TokenConnection;
        $token->update_data($id, $value);
    }

    header("Location:" . download_area_url); //changable

} else {
    require_once "Views/payment.php";
}