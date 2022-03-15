<?php
session_start();
// session_destroy(); //added by hadeer***
// session_start(); //added by hadeer***
require_once "vendor/autoload.php";

//*************************************************************************************************
if (isset($_COOKIE["Token"]) || isset($_SESSION['is_logged'])) {
/*
if (isset($_COOKIE["Token"])) {
//return old token and get uid from db

//set new token
$tContent = "abcdefgh" . rand(0, 9999999) . "ijklmnop" . rand(0, 9999999) . "qrstuvxy"; //8+8+8+7*2 (38 char.)
setcookie("Token", $tContent, 2147483647, '/'); ///

// // database and session
// $user = new UserConnection;
// $id = $user->get_data($email);
// $_SESSION['user_id'] = $id;
// $_SESSION['token_added'] = true;

//update token in DB
$user_token = $_COOKIE['Token'];
$token = new TokenConnection;
$token->insert_data($id, $user_token);

}*/

    header("Location: http://localhost/iti/PHP_Repo/Views/download_area.php"); //changable
    //require_once "Views/download_area.php";
//     if (){
//         //update Token and save in DB
// }
} else {
    require_once "Views/payment.php";
}
//*************************************************************************************************