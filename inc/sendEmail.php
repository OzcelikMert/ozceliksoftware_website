<?php

// Replace this with your own email address
$siteOwnersEmail = "info@ozceliksoftware.com";
$email="";
$name="";

function mailgonder($kimden, $kime, $mesaj){
include 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'mail.ozceliksoftware.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = 'info@ozceliksoftware.com';
$mail->Password = '8920Ozcelik*#0657Qwe/';
$mail->SetFrom($kime, "Özçelik Software");
$mail->AddAddress($mail->Username, $name);
$mail->CharSet = 'UTF-8';
$content = $mesaj;
$mail->MsgHTML($content);
if($mail->Send()) {
 echo "OK"; 
} else {
   echo "Birşeyler yanlış gitti. Lütfen tekrar deneyiniz."."</br>"; 
    echo $mail->ErrorInfo;
}
}
if($_POST) {
$error="";
    $name = trim(stripslashes($_POST['contactName']));
    $email = trim(stripslashes($_POST['contactEmail']));
    $contact_message = trim(stripslashes($_POST['contactMessage']));

    // Check Name
    if (strlen($name) < 2) {
        $error['name'] = "Lütfen isiminizi giriniz.";
    }
    // Check Email
    if (!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email)) {
        $error['email'] = "Lütfen Email hesabınızı giriniz.";
    }
    // Check Message
    if (strlen($contact_message) < 15) {
        $error['message'] = "Lütfen Mesajınızı yazınız. En az 15 karakter olmalı.";
    }


    // Set Message
    $message  = "Gönderen İsimi: " . $name . "<br />";
    $message .= "Email address: " . $email . "<br />";
    $message .= "Mesajı: <br />";
    $message .= $contact_message;
    $message .= "<br /> ----- <br /> Bu mesaj www.ozceliksoftware.com sitesinden gelmiştir. <br />";

    // Set From: header
    $from =  $name . " <" . $email . ">";

    // Email Headers
    $headers = "From: " . $from . "\r\n";
    if (!$error) {

      mailgonder($email, $siteOwnersEmail, $message);

    }

    else {

        $response = (isset($error['name'])) ? $error['name'] . "<br /> \n" : null;
        $response .= (isset($error['email'])) ? $error['email'] . "<br /> \n" : null;
        $response .= (isset($error['message'])) ? $error['message'] . "<br />" : null;
        
        echo $response;

    } # end if - there was a validation error

}

?>