<?php
//get data from form  
$name = 'sandeep';//$_POST['name'];
$email= 'kaushiksandeep1@gmail.com';//$_POST['email'];
$message= 'ok got it!';//$_POST['message'];
$to = "kaushiksandeep1@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: kaushiksandeep1@gmail.com" ;
// "CC: somebodyelse@example.com";
if($email != NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
?>ok