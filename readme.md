# Ticket and qrcode
- All qrcodes generated will be found in `assets/QRcodes`.  
QRcodes will be saved `qrcode'ID'.png` where each user has an unique ID.  

- All tickets generated will be found in `assets/tickets`.  
Tickets will be stored `ticket'ID'.jpg` where each user has a unique same that of qr.

## functions 

<div style="width:50%;">
<hr>
</div>


### `generateQR($data, $dataID)`

- `data` is the data you need to store inside the qrcode, 
It can be an associative array (will be converted to prettified json before storing).

- `dataID` the id  will be assigned the qrcode when it will be stored on the server.

### `generateTicket($data, $dataID)`
- `data` is the text data you need to store inside the ticket. It can be an associative array (will be converted to prettified json before storing).


- `dataID` the id of the qrcode saved on the server and will be assigned to the ticket saved.
