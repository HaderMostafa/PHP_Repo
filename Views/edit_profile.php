<?php
session_start();
require_once "../vendor/autoload.php";
require_once 'edit_profile_logic.php';

?>

<html>

<head>
    <title> Edit Profile </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="parent">
        <header class="headerForm">
            <h1>EDIT <br>PROFILE</h1>
            <h2>Welcome to our website</h2>
            <p>you are buying an online . it will be added to your profile and can buying online anytime
                , on my device , at shopping online .com .</p>
        </header>

        <section class="FormParent">
            <form class="container" action="#" method="POST">
                <div class="styleInput">
                    <!-- email -->
                    <label for="email"> Edit Email :</label>
                    <input class="form-control" type="text"
                        value="<?php if (isset($_POST['update'])) {echo $_SESSION['email'];}?>"
                        placeholder="Edit Your Email " name="email">
                    <!-- error -->
                    <span class="error"><?php echo $emailErr; ?> </span></br>
                </div>

                <div class="styleInput">
                    <!-- password -->
                    <label for="password">Edit password :</label>
                    <input class="form-control" type="password" value="" placeholder="Edit Your Password "
                        name="password">
                    <!-- error -->
                    <span class="error"><?php foreach ($passwordErr as $line) {echo "$line</br>";}?> </span></br>

                </div>

                <div class="styleInput">
                    <!-- confirm password -->
                    <label for="repeatPassword"> Confirm Password :</label>
                    <input class="form-control" type="password" value="" placeholder="Re-enter Your Password"
                        placeholder="Enter Re-enter Password " name="repeatPassword">
                    <!-- error -->
                    <span class="error"><?php echo $passwordEqual; ?> </span></br>
                </div>

                <button type="submit" class="btn btn-primary styleSubmit" name="save">Save Changes</button>
                <button type="submit" class="btn btn-warning " name="update">Update</button><br>
                <button type="submit" class="btn btn-primary styleBack" name="back">Back to download</button><br>
            </form>

</body>

</html>