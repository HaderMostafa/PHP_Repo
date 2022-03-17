<?php

session_start();
require_once "../vendor/autoload.php";

//test_without_it:
use Illuminate\Database\Capsule\Manager as Database;

//??
// if (isset($_POST['link'])) {require_once 'download_logic.php';}


$product = new ProductConnection; 
$oldfname=$product-> get_data();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<style>

</style>

<body>
    <div class="parent">
        <header class="headerForm">
            <h1>Product</h1>
            <h2>Welcome to our website</h2>

            <p>you are buying an online . it will be added to your profile and can buying online anytime
                , on my device , at shopping online .com .</p>
            <img style="width:480px" src="Capture.jpg" alt="Capture" />
        </header>
        <section class="FormParent">
            <form class="container" action="#" method="POST">
                <div style="padding:15px 0px ">
                    <label>Product Name :</label>
                    <input type="text" class="form-control" name="product" placeholder="Product Name"></input>
                </div>
                <div style="padding:15px 0px ">
                    <label>Size Product :</label>
                    <input type="text" class="form-control" name="size" placeholder="Size Product"> </input>
                </div>
                <a style="color:red; font-weight: 900; font-size:20px" href="download_logic.php" target="_blank" class="" name="link">Hyperlink</a>
                <!-- <a href="after_download.php" target="_blank" class="" name="link" >Hyperlink</a><br>  -->
            </form>

        </section>
    </div>



</body>

</html>