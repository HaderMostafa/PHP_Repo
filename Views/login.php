<?php
session_start(); 
require_once "../vendor/autoload.php";
require_once 'login_logic.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="parent">
        <header class="headerForm">
            <h1>LOGIN</h1>
            <h2>Welcome to our website</h2>
            <h4>Please fill out the form to view our products</h4>
            <p>you are buying an online . it will be added to your profile and can buying online anytime
                , on my device , at shopping online .com</p>
        </header>
        <section class="FormParent">
            <form class="container" action="#" method="POST">

                <div class="styleInput">
                    <label for="name"> Username :</label>
                    <input class="form-control" type="text" value="<?php if (count($nameErr) == 0) {
    echo $name;
}
?>" placeholder="Enter Your Name " name="name">
                    <span class="error"><?php foreach ($nameErr as $line) {echo "$line</br>";}?> </span></br>
                </div>

                <div class="styleInput">
                    <label for="email"> Email :</label>
                    <input class="form-control" type="text" value="<?php if ($emailErr == "") {
    echo $email;
}
?>" placeholder="Enter Your Email " name="email">
                    <span class="error"><?php echo $emailErr; ?> </span></br>
                </div>

                <div class="styleInput">
                    <label for="password"> Password :</label>
                    <input class="form-control" type="password" value="<?php if (count($passwordErr) == 0) {
    echo $password;
}
?>" placeholder="Enter Your Password " name="password">
                    <span class="error"><?php foreach ($passwordErr as $line) {echo " $line</br>";}?> </span></br>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                    <label class=" form-check-label" for="exampleCheck1">Rememeber Me</label>
                </div>
                <button type="submit" class="btn btn-primary styleSubmit" name="submit">Login</button><br>
            </form>

        </section>
    </div>

</body>

</html>