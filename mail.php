<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];
$to = "sudhanshukr189@mgmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: sudhanshuk20@iitk.ac.in" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>