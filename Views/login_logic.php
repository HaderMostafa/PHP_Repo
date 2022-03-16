<?php

// define variables to empty values
$nameErr = array();
$passwordErr = array();
$emailErr = "";
$name = $email = $password = "";

//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Name Validation
    if (empty($_POST["name"])) {
        $nameErr[] = "Name is required";
    } else {
        $name = test_input($_POST["name"]);

        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr[] = "Only alphabets and white space are allowed";
        }

        //check if name does not exceed 100 characters
        if (strlen($name) > MAX_NAME_LENGTH) {
            $nameErr[] = "Name is too long";
        }

        //check if name is short
        if (strlen($name) <= MIN_NAME_LENGTH) {
            $nameErr[] = "Name is too short";
        }
    }

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

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    if (count($nameErr) == 0 && $emailErr == "" && count($passwordErr) == 0) {

        //confirm that the user data matching in db
        $user = new UserConnection;
        $check_result = $user->check_login($name, $email, $password);

        if ($check_result == true) {

            if (isset($_POST['remember_me'])) {

                $value = uniqid(time(), true); //to generate unique token
                setcookie("remember_me", $value, time() + 2 * 24 * 60 * 60, '/');

                // database and session
                $user = new UserConnection;
                $id = $user->get_data($email);

                //add user id in session as variable
                $_SESSION['user_id'] = $id;

                //insert token in DB
                $token = new TokenConnection;
                $token->insert_data($id, $value);

            } else {
                $user = new UserConnection;
                $id = $user->get_data($email);

                //add user id in session as variable
                $_SESSION['user_id'] = $id;
            }

            $_SESSION['is_logged'] = true; //added for test
            header("Location:" . download_area_url); //changable
        } else {
            echo "fail";
        }
    }
}