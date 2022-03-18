<?php
require_once "../vendor/autoload.php";
// use Illuminate\Database\Capsule\Manager as Database;
// echo "in rename file";
$product = new ProductConnection;
$oldfname = $product->get_data();

// rename link to prevent external download
// $file_name2 = "rename";
// $Page_url2 = basic_url . $file_name2 . ".php";

// if (file_exists($Page_url2)) {
//     $old_number2 = intval(substr($file_name2, 5));
//     $new_number2 = $old_number2 + 1;
//     $new_name2 = $file_name2 . $new_number2;
//     $new_Page_url2 = basic_url . $new_name2 . ".php";
//     rename($Page_url2, $new_Page_url2);
// }

$file_name = "download_logic";
$Page_url = basic_url . $oldfname . ".php";

if (file_exists($Page_url)) {
    $old_number = intval(substr($oldfname, 14));
    $new_number = $old_number + 1;
    $new_name = $file_name . $new_number;
    $new_Page_url = basic_url . $new_name . ".php";

    if (rename($Page_url, $new_Page_url)) {
        // echo "Successfully Renamed $Page_url to $new_Page_url" ;
        //update_in_database
        $product->update_product($new_name);
    } else {
        //  echo "A File With The Same Name Already Exists" ;
    }
}

ForceDownload::download();
header("Location:download_info.php");