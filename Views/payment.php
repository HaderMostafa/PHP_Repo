<?php require_once 'payment_logic.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Php</title>
    <link rel="stylesheet" href="Views/css/bootstrap.min.css">
    <link rel="stylesheet" href="Views/css/all.min.css">
    <link rel="stylesheet" href="Views/style.css">
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
            <img class="imgCard" src="Views/debit-card.png" style="height: 200px; margin : 30px 70px  ;" />
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

                <div class="styleInput">
                    <label for="repeatPassword"> Confirm Password :</label>
                    <input class="form-control" type="password" value="<?php if ($passwordEqual == "") {
    echo $repeatedPassword;
}
?>" placeholder="Enter Return Password " name="repeatPassword">
                    <span class="error"><?php echo $passwordEqual; ?> </span></br>
                </div>

                <div class="styleInput">
                    <label for="creditCard"> Credit Number :</label>
                    <input class="form-control" type="number" value="<?php if ($creditErr == "") {
    echo $creditNumber;
}
?>" placeholder="Enter Credit Number " name="creditCard">
                    <span class="error"><?php echo $creditErr; ?> </span></br>
                </div>

                <div class="styleInput">
                    <label for="expirationCard"> Credit Expiration date :</label>
                    <input class="form-control" type="date" value="<?php if ($expireErr == "") {
    echo $expireDate;
}
?>" placeholder="Enter Expiration date " name="expirationCard">
                    <span class="error"><?php echo $expireErr; ?> </span></br>
                </div>
                <button type="submit" class="btn btn-primary styleSubmit" name="submit">Buy</button>
                <img class="visa" src="Views/visa.png" style="height: 90px;" />

                <!-- done -->
                <a class="ancorPage" href="Views/login.php">Login</a>
            </form>

        </section>
    </div>
</body>

</html>