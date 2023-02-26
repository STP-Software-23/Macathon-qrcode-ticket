<?php 
require_once('./lib/phpqrcode/qrlib.php');

// $data = [
//     "name" => "test",
//     "age" => 17
// ];

function generateQR($data , $dataID){


        // qrcode of the user to be put on the ticket
        $logo_image = imagecreatefrompng("assets/QRcodes/qrcode".$dataID.".png");
        $logo_width = imagesx($logo_image);
        $logo_height = imagesy($logo_image);
}

// generateQR($data,2)


?>