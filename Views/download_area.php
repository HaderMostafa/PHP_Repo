<?php
session_start(); //added by hadeer**********************************************************
require_once "../vendor/autoload.php";

// if (){

// }
//var_dump($_COOKIE);
//var_dump(isset($_COOKIE["Token"]));
// var_dump($_POST); //??????????????now
// var_dump($_SESSION); //added by hadeer**********************************************************
// echo "<br>";
// echo "welcome ya hadeer"; //added by hadeer**********************************************************
// echo "<br>";
// var_dump($_COOKIE); //added by hadeer**********************************************************
// $_SESSION['is_logged'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Download Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="parent">
        <header class="headerForm">
            <h1>DOWNLOAD</h1>
            <h2>Welcome to our website</h2>

            <p>you are buying an online . it will be added to your profile and can buying online anytime
                , on my device , at shopping online .com .</p>
        </header>
        <section class="FormParent">
            <form class="container" action="#" method="POST">

                <button type="button" class="btn btn-primary styleBack" name="download"><a href="download_info.php"
                        class="" name="link">Download</a> </button><br>
                <button type="button" class="btn btn-primary styleBack" name="edit"><a href="edit_profile.php" class=""
                        name="link">Edit profile</a></button><br>
                <button type="button" class="btn btn-primary styleBack" name="logout"><a href="login.php" class=""
                        name="link">Logout</a></button><br>
            </form>
        </section>
    </div>
</body>

</html>