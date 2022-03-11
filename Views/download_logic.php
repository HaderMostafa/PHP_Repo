<?php
require_once('download_info.php');

// echo $GLOBALS['flag'];
while($flag){
  echo "flag should be true : ->".$flag;
// Initialize a file URL to the variable
    $url = 'C:\Users\Monica Ashraf\OneDrive - Alexandria University\Desktop\img1.PNG';
      
    // Use basename() function to return the base name of file
    $file_old_name = basename($url);// Old Name Of The file
      
    // Use file_get_contents() function to get the file
    // from url and use file_put_contents() function to
    // save the file by using base name
    if (file_put_contents($file_old_name, file_get_contents($url)))
    {
        echo "File downloaded successfully";
    }
    else
    {
        echo "File downloading failed.";
    }

// New Name For The File
$new_name = "img".$index++.".PNG" ; 
// Checking If File Already Exists
if(file_exists($new_name))
 { 
   //echo "Error While Renaming $file_old_name" ;
 }
else
 {
   if(rename( $file_old_name, $new_name))
     { 
        echo "Successfully Renamed $file_old_name to $new_name" ;
        //$GLOBALS['flag']=false;
        $flag=false;
       echo "flag should be false inside rename : ->".$flag;
       header("Location: http://localhost/PHPinVisualStudioCode/PHP_Project/PHP_Repo/Views/after_download.php ");
     }
     else
     {
        echo "A File With The Same Name Already Exists" ;
     }
  }
}

//$user = new UserConnection;
//    // $userid=$user->where("email","=","monicaashraf534@gmail.com")->value("uid");
//     $userid=$user->select("email","monicaashraf534@gmail.com","uid");
//     $now= new DateTime('now');
//     $date=$now->format('Y-m-d H:i:s');
//     $productid=1;
//     $count=1;
//     $order = new OrdersConnection;
//     $order-> insert_order($userid,$productid,$date,$count);

?>
