<?php
class ForceDownload{
    public static function download(){
        $file = "../Resources/time2.jpg";
        header("Content-Description: File Transfer");
        header("Content-Type: image");
        $str = "Content-Disposition: attachment; filename=\"" . basename($file) . "\"";
        header($str);
        readfile($file);
        // require_once("rename.php");
        exit();
    }
}