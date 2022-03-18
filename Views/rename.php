<?php
require_once("../vendor/autoload.php");
// use Illuminate\Database\Capsule\Manager as Database;
// echo "in rename file";
$product = new ProductConnection;
$oldfname=$product-> get_data();

$file_name="download_logic";
$Page_url=basic_url.$oldfname.".php";

if(file_exists($Page_url))
 {   $old_number=intval(substr($oldfname,14));
     $new_number=$old_number+1;
     $new_name=$file_name.$new_number;
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