<?php
//mail(to,subject,message,headers)=this can we used to send the mail
//in header  we can use cc,from,bcc(blind carbon copy)
$to_email = "dolatrathore18@gmail.com";
$subject = "Test mail";
$body = "hello! This is a simple email message";
$headers = "From: dolurathore18@gmail.com";

if(mail($to_email , $subject, $body, $headers)){
    echo "Mail sent to $to_email...";
}
else{
    echo "Email not send....";
}

?>
