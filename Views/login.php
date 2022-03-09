<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Php</title>
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/css/all.min.css">
    <link rel="stylesheet" href="Views/style.css">
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
                    <input class="form-control" type="text" placeholder="Enter Your Name " name="name">
                </div>

                <div class="styleInput">
                    <label for="email"> Email :</label>
                    <input class="form-control" type="text" placeholder="Enter Your Email " name="email">
                </div>

                <div class="styleInput">
                    <label for="password"> Password :</label>
                    <input class="form-control" type="password" placeholder="Enter Your Password " name="password">
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Rememeber Me</label>
                </div>
                <button type="submit" class="btn btn-primary styleSubmit" name="submit">Login Data</button><br>
                <!-- <button type="submit" class="btn btn-danger " name="submit">Sign In</button><br> -->
                <a class="ancorPage" href="register.php" >Sign Up</a>
            </form>
            <?php require_once('login_logic.php') ; ?>
        </section>
    </div>



</body>

</html>
