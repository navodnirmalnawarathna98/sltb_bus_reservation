<?php
    session_start();
require_once 'phpqrcode/qrlib.php';

$path = 'images/';
$file = $path.uniqid().".png";

// if(isset($_SESSION['text'])){
//     $text = $_SESSION['text'];
// }else{
//     $text = null;
// }
$text = $_SESSION['text'];

QRcode::png($text, $file, 'Q', 10, 2);

echo "<center><img src='".$file."'><center>";


unset($_SESSION['text']);


?>