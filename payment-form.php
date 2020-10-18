 <?php
$amount = $_POST['amount'];
$customer_id = $_POST['customer_id'];
$f_name = $_POST[‘first_name’];
$l_name = $_POST[‘last_name’];
$email_address = $_POST[’email’];
$phone = $_POST[‘phone_no’];
$myemail = 'test@gmail.com';
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

 <html>
   <head>
    <link rel="stylesheet" href="css-form.css">

   </head>
 <body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<form method="post" name="myemailform" action="" id="payment">
<div id="make-payment">
  <h1>Make a payment</h1>

Customer ID: <input type="text" name="customer_id" value="" /></br>
First Name*: <input type="text" name="first_name" value="" /></br>
Last Name*: <input type="text" name="last_name" value="" /></br>
Email Address* :<input type="email" id="email" name="email" value="" required/></br>
Phone No* : (e.g. 0432 567 753)<input type="tel" id="phone_no" name="phone_no" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required/></br>
  <label for="payment-value">Payment Amount</label>
  <input type="text" id="payment-value" />
  <button id="eway-dummy"><span style="display: block; min-height: 30px;">Pay Now ($<em id="payment-total">0.00</em>)</span>
  </button>
</div>
</form>
<p id="success">Payment has been done
</p>
<script src="payment.js">

</script>
</body>
</html>
