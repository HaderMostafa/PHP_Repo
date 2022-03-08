<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Php</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <div class="parent">
        <header class="headerForm">
            <h1>PAYMENT HOME</h1>
            <h2>Welcome to our website</h2>
            <h4>Please fill out the form if you don't have any account to view our products .</h4>
            <p>you are buying an online . it will be added to your profile and can buying online anytime
                , on my device , at shopping online .com .</p>
            <img class="imgCard" src="debit-card.png" style="height: 200px; margin : 30px 70px  ;" />
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

                <div class="styleInput">
                    <label for="repeatPassword"> Confirm Password :</label>
                    <input class="form-control" type="password" placeholder="Enter Return Password " name="repeatPassword">
                </div>

                <div class="styleInput">
                    <label for="creditCard"> Credit Number :</label>
                    <input class="form-control" type="number" placeholder="Enter Credit Number " name="creditCard">
                </div>

                <div class="styleInput">
                    <label for="expirationCard"> Credit Expiration date :</label>
                    <input class="form-control" type="number" placeholder="Enter Expiration date " name="expirationCard">
                </div>


                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Rememeber Me</label>
                </div> -->
                <button type="submit" class="btn btn-primary styleSubmit" name="submit">Buy</button>
                <img class="visa" src="visa.png" style="height: 90px;"/>
                
                <!-- <a class="ancorPage" href="login.php" >Login</a> -->
            </form>
            <?php require_once('validationRegister.php') ; ?>
        </section>
    </div>



</body>

</html>