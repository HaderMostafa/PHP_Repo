<?php
session_start();
require_once "../vendor/autoload.php";

if (isset($_POST['download'])) {

    header("Location:" . download_info_url); //changable

} else if (isset($_POST['edit'])) {

    header("Location:" . edit_profile_url); //changable

} else if (isset($_POST['logout'])) {

    //destroy session
    session_destroy();

    if (isset($_COOKIE["remember_me"])) {

        // remove record from db
        $token = new TokenConnection;
        $num = $token->delete_record($_COOKIE["remember_me"]);

        //destroy cookie in browser
        unset($_COOKIE["remember_me"]);
        setcookie("remember_me", "", -1, '/');
    }

    header("Location:" . login_url); //changable
}

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
        <section class="FormParent " style="display:flex; align-items:center; height: 320px;">
            <form class="container" action="#" method="POST">

                <button type="submit" class="btn btn-primary styleBack" name="download"> Download</button><br>
                <button type="submit" class="btn btn-primary styleBack" name="edit">Edit Profile</button><br>
                <button type="submit" class="btn btn-primary styleBack" name="logout">Log out</button><br>
            </form>
        </section>
        <div>
         <!-- <img style="position: absolute; top: 370px; left: 48%;" src="downloadImg.jpg" alt="download" /> -->
        </div>
    </div>
    
</body>

</html>