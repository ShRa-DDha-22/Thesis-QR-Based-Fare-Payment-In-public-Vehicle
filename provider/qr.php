<?php
// session_start();
// //check the user access rights
// if( $_SESSION["Type"]!="Provider")
// {
//     echo "you are not allow to access this page";
//     exit();
// }
// require_once 'phpqrcode/qrlib.php';
// if(!empty($_REQUEST))
// {
//     $path='images/';
//     $file=$path.uniqid().".png";
    
//     //conctenate the data to generrate th QR Code
//     $text="FirstName: ".$_REQUEST["firstName"].", ";
//     $text .="LastName: ".$_REQUEST["lastName"].", ";
//     $text .="Price: ".$_REQUEST["amount"].", ";
//     $text .="TransactionID: ".$_REQUEST["transactionID"].", ";
//     $text .="Location: ".$_REQUEST["location"].", ";
//     $text .="Provider ID: ".$_REQUEST["provider"].", ";
//     $text .="Date: ".$_REQUEST["date"].", ";

//     QRcode::png($text,$file,'L',10,2);
//     echo "<img src='".$file."'>";
// }
// else
// {
// }
?>


<!DOCTYPE html>
<html>
<body>

<h2>Generated QR Code</h2>
<img src="qr.PNG" alt="QR" width="440" height="440">

</body>
</html>
