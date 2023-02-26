<?php 

require_once('./lib/phpqrcode/qrlib.php');


function generateTicket($data){

    // create Qrcode 
    $text = json_encode($data, JSON_PRETTY_PRINT);
    $level = QR_ECLEVEL_M;
    $size = 5;
    $margin = 4;
    //returns image as string format
    $pngQRcode = QRcode::png($text, null, $level, $size, $margin);
    
    // Load the original image (place holder till we get the real ticket)
    $originalImage = imagecreatefromjpeg('assets/ticket.jpg');
    
    // Set the text color and font (not yet agreed upon)
    $textColor = imagecolorallocate($originalImage, 0, 0, 0);
    $font = __DIR__ . '/assets/font/JetBrainsMono-Bold.ttf';
    
    // Add the text to the image (position is still a placeholder till we get the real ticket)
    //text will be agreed upon
    imagettftext($originalImage, 36, 0, 10, 50, $textColor, $font, $data);
    
    // qrcode of the user to be put on the ticket
    $logo_image = imagecreatefromstring($pngQRcode);
    $logo_width = imagesx($logo_image);
    $logo_height = imagesy($logo_image);
    
    // Copy the new image onto the new one
    imagecopy($originalImage, $qrcode, 350, 200, 0, 0, $logo_width, $logo_height);
    
    // Save the image with the text

    //save the image data as string to use imagecreatefromstring($ticket) later
    ob_start();
    imagejpeg($originalImage, null);
    $ticket = ob_get_clean();
    
    // Free up memory
    imagedestroy($originalImage);
    imagedestroy($logo_image);

    return ticket;
}





?>