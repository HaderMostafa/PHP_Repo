<?php
// session_start();
// $_SESSION['flag2']=true;
//require_once('download_logic.php');
 //$flag=true;
//  while($_SESSION['flag2']){
//if(isset($_POST['link'])){
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  //after_download.php
$index=1;
$newPageName= $index++.".php";
if(file_exists($newPageName))
 { 
   //echo "Error While Renaming $curPageName" ;
 }
else
 {
   if(rename( $curPageName, $newPageName))
     { 
        echo "Successfully Renamed $curPageName to $newPageName" ;
      //  $new_link = 'http://localhost/PHPinVisualStudioCode/PHP_Project/PHP_Repo/Views/'.$newPageName; 
      // echo "flag should be false inside rename : ->".$flag;
     header("Location: http://localhost/PHPinVisualStudioCode/PHP_Project/PHP_Repo/Views/$newPageName ");
     $_SESSION['flag2']=false;
     }
     else
     {
        echo "A File With The Same Name Already Exists" ;
     }
  }
// }
  ?>