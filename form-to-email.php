<?php
$amount = $_POST['amount'];
$customer_id = $_POST['customer_id'];
$f_name = $_POST[‘first_name’];
$l_name = $_POST[‘last_name’];
$email_address = $_POST[’email’];
$phone = $_POST[‘phone_no’];
$myemail = 'vrundap109@gmail.com';
$to =email_address;
$email_subject = “Payment Successfully submitted: $name”;

$email_body = “Thank you for making a successfull payment“.

” Here are the details:\n 
Name: $name \n “.

“Email: $email_address\n Message \n $message”;
$headers = “From: $myemail\n”;
$headers .= “Reply-To: $email_address”;

mail($to,$email_subject,$email_body,$headers);
?>

