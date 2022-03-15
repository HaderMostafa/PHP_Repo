<?php
session_start();
require_once "../vendor/autoload.php";

if (isset($_POST['download'])) {

    header("Location: http://localhost/iti/PHP_Repo/Views/download_info.php"); //changable

} else if (isset($_POST['edit'])) {

    header("Location: http://localhost/iti/PHP_Repo/Views/edit_profile.php"); //changable

} else if (isset($_POST['logout'])) {

    //destroy session
    session_destroy();

    //destroy cookie
    setcookie('Token', "", time() - 3600);

    header("Location: http://localhost/iti/PHP_Repo/Views/login.php"); //changable
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
        <section class="FormParent">
            <form class="container" action="#" method="POST">

                <button type="submit" class="btn btn-primary styleBack" name="download"> Download</button><br>
                <button type="submit" class="btn btn-primary styleBack" name="edit">Edit Profile</button><br>
                <button type="submit" class="btn btn-primary styleBack" name="logout">Log out</button><br>
            </form>
        </section>
    </div>
</body>

</html>