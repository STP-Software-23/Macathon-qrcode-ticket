<?php 
require_once('./lib/phpqrcode/qrlib.php');

// $data = [
//     "name" => "test",
//     "age" => 17
// ];

function generateQR($data , $dataID){
    $text = json_encode($data, JSON_PRETTY_PRINT);
    $path = 'images/';
    $filename = 'QRcodes/qrcode'.$dataID.'.png';
    $level = QR_ECLEVEL_M;
    $size = 5;
    $margin = 4;
    QRcode::png($text, $filename, $level, $size, $margin);
}

// generateQR($data,2)


?>