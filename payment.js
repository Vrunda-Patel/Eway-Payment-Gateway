$(document).ready(function () {
    if(window.location.href.indexOf("Accesscode") > -1) {
       $("#payment").hide();
    }
	else{
		$("#success").hide();
	}
});
$('#make-payment').on('keyup', '#payment-value', function() {
  //Change payment total in dummy button
  var paymentValue = $('#payment-value').val();
  $('#payment-total').text(paymentValue);
});

$('#make-payment').on('click', '#eway-dummy', function() {
  //Store button text, change button text to "loading" and then return it
  var currentText = $('#eway-dummy span').text();
  $('#eway-dummy span').text('loading payment');
  setTimeout(function() {
	$('#eway-dummy span').text(currentText);
  }, 5000);

  //Store report number
  var email = $('#email').val();
   var phone_no = $('#phone_no').val();

  //Store payment value and remove the decimal place
  var paymentValue = $('#payment-value').val().replace(".", "");

  //Create custom button
  $('#make-payment').append('<script src="https://secure.ewaypayments.com/scripts/eCrypt.js" class="eway-paynow-button" data-publicapikey="epk-5C4E9F57-C730-40B6-9E20-022CA44347C3" data-amount="' + paymentValue + '" data-email="' + email + '" data-phone= "' + phone_no +'" data-currency="AUD" + data-resulturl="/"><\script>');
  //Click the button
  setTimeout(function() {
	$('.eway-button').trigger('click');
  }, 1000);
});
