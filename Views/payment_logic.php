<?php
// use Illuminate\Database\Capsule\Manager as Database;
if (isset($_POST['submit'])) {

    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatPassword'];

    $errors = [] ;
    
    // validating username
    if(empty($username)){
        $errors[] = "your name not found" ;
    }
    elseif(strlen($username)>255){
        $errors[] = "your name is very long " ;
    }
    elseif(!is_string($username)){
        $errors[] = "your name must be string not number " ;
    }


    // validating email 
    if(empty($email))
    {
        $errors[] = "your email not found" ;
    }
    elseif(! filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "email is not valid " ;
    }


    // validating password
    if(empty($password)){
        $errors[] = "your password not found" ;
    }
    
    //validating repeatPassword
    if(empty($repeatPassword)){
        $errors[] = "your repeat password not found" ;
    }
    elseif($password != $repeatPassword){
        $errors[] = "your repeat password not correct" ;
    }
    
    // print_r($errors) ;
    foreach($errors as $error){
        "<p class='pError'>".print_r($error)."</p>";
    }

    $user = new UserConnection;
    if(empty($errors)){
  
    $user->insert_data($username,$email,$password);
    header("Location: http://localhost/php_project/PHP_Repo/Views/login.php");
}
  
}
?>