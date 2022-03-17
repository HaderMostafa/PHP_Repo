<?php
require_once("../vendor/autoload.php");
// use Illuminate\Database\Capsule\Manager as Database;
// echo "in rename file";
$product = new ProductConnection;
$oldfname=$product-> get_data();
$flag=1;
$Page_url=basic_url.$oldfname.".php";

if(file_exists($Page_url))
 { 
  
     $flag++;
     $new_name=$oldfname.$flag;
     $new_Page_url=basic_url.$new_name.".php";
    if(rename( $Page_url, $new_Page_url))
      { 
        // echo "Successfully Renamed $Page_url to $new_Page_url" ;
        //update_in_database
        $product->update_product($new_name);
    }
      else
      {
        //  echo "A File With The Same Name Already Exists" ;
      }
   }

    ForceDownload::download();
   header("Location:download_info.php");