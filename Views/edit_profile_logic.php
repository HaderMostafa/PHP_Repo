<?php

// define variables to empty values
$passwordErr = array();
$passwordValid = "Your Password is strong";
$passwordEqual = "";
$emailErr = "";
$email = $password = $repeatedPassword = "";

//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& hide validation
    /*
    //Email Validation
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    } else {
    $email = test_input($_POST["email"]);

    // check that the e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
    }

    // Password Validation
    if (empty($_POST["password"])) {
    $passwordErr[] = "Password is required";
    } else {
    $password = test_input($_POST["password"]);
    if (strlen($password) < MIN_PASS_LENGTH) {
    $passwordErr[] = "Password length must be at least 8 characters";
    }
    if (!preg_match("@[0-9]@", $password)) {
    $passwordErr[] = "Password must contain at leat one number";
    }
    if (!preg_match("@[A-Z]@", $password)) {
    $passwordErr[] = "Password must contain at leat one Upper Case letter";
    }
    if (!preg_match("@[a-z]@", $password)) {
    $passwordErr[] = "Password must contain at leat one Lower Case letter";
    }
    if (!preg_match("@[^\w]@", $password)) {
    $passwordErr[] = "Password must contain at leat one Special Character";
    }
    }

    //Password Confirmation
    if (empty($_POST["repeatPassword"])) {
    $passwordEqual = "Please confirm password";
    } else {
    $repeatedPassword = test_input($_POST["repeatPassword"]);
    if ($password != $repeatedPassword) {
    $passwordEqual = "Please Re enter your password correctly";
    }
    }
     */
    //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['back'])) {
    header("Location: http://localhost/iti/PHP_Repo/Views/download_area.php"); //changable
}

if (isset($_POST['submit'])) {
    // needed to be checked again with dina
    /* if ($emailErr == "" && count($passwordErr) == 0 && $passwordEqual == "") { */

    //update in db
    $id = $_SESSION['user_id'];
    $user = new UserConnection;
    $user->update_data($id, $email, $password);

    /* }*/
}