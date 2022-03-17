<?php
require_once('download_info.php');


//INSERT IN ORDER TABLE NEW V
$order = new OrdersConnection;
$userIdSession=$_SESSION['user_id'];
$userid=$order->get_userId($userIdSession);
if($userid!=NULL){//EXIST => UPDATE
    $now= new DateTime('now');
    $date=$now->format('Y-m-d H:i:s');
    $count=$order->get_count($userIdSession);
    $new_count=++$count;
      if($new_count<=7){
        $order->update_order($userIdSession,$date,$new_count);   
        header("Location:rename.php");   
       }
      else{
          echo "you can't download";
       }
}
else{//NOT EXIST => first_visit
    $productid=1;
    $now= new DateTime('now');
    $date=$now->format('Y-m-d H:i:s');
    $count=1;
    $order-> insert_order($userIdSession,$productid,$date,$count);
    header("Location:rename.php"); 
    
}


// header("Location:rename.php");




// $file = "../time2.jpg";
// header("Content-Description: File Transfer");
// header("Content-Type: image");
// $str = "Content-Disposition: attachment; filename=\"" . basename($file) . "\"";
// header($str);
// readfile($file);
// // require_once("rename.php");
// exit();








?>
