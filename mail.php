<?php session_start();
$subject=$_POST['email'];
$message=$_POST['message'];
$mail_from=$_POST['phone'];
$header=$_POST['name'].' '.$_POST['phone'];
$to='info@elmerglobal.com';
$verify_contact=mail($to,$subject,$message,$header,$mail_from);

if($verify_contact){
$_SESSION['sent']='yes';

header("location:contact.php");
}
else {
echo "ERROR, Your message was not sent, please go back and try again";
}
?>