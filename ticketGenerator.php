<?php 

function generateTicket($data,$dataID){
    
    // Load the original image (place holder till we get the real ticket)
    $originalImage = imagecreatefromjpeg('assets/ticket.jpg');
    
    // Set the text color and font (not yet agreed upon)
    $textColor = imagecolorallocate($originalImage, 0, 0, 0);
    $font = __DIR__ . '/assets/font/JetBrainsMono-Bold.ttf';
    
    // Add the text to the image (position is still a placeholder till we get the real ticket)
    //text will be agreed upon
    imagettftext($originalImage, 36, 0, 10, 50, $textColor, $font, $data);
    
    // qrcode of the user to be put on the ticket
    $logo_image = imagecreatefrompng("assets/QRcodes/qrcode".$dataID.".png");
    $logo_width = imagesx($logo_image);
    $logo_height = imagesy($logo_image);
    
    // Copy the new image onto the new one
    imagecopy($originalImage, $logo_image, 350, 200, 0, 0, $logo_width, $logo_height);
    
    // Save the image with the text
    imagejpeg($originalImage, 'assets/tickets/ticket'.$dataID.'.jpg');
    
    // Free up memory
    imagedestroy($originalImage);
    imagedestroy($logo_image);
}





?>