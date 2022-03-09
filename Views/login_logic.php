<?php

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

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
    
    
    
    // print_r($errors) ;
    foreach($errors as $error){
        "<p class='pError'>".print_r($error)."</p>";
    }
    
}
?>


