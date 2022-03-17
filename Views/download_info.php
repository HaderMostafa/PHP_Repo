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
        </header>
        <section class="FormParent">
            <form class="container" action="#" method="POST">
                <input type="text" class="" name="product">Product Name</input><br>
                <input type="text" class="" name="size">Size </input><br>
                <a href="<?php  echo $oldfname.".php" ?>"  class="" name="link">Hyperlink</a><br>
                <!-- <a href="after_download.php" target="_blank" class="" name="link" >Hyperlink</a><br>  -->
            </form>

        </section>
    </div>



</body>

</html>