<?php
	
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  optin
    //
    //  Before text messages can be sent to a recipient, there must be consent
    //
    //  The optin action sends a mobile terminated sms to the recipient's handset which asks them
    //  to respond YES to confirm enrollment in your text club
    //
    //  The recipient must respond YES to confirm enrollment and the recipient is considered
    //  unconfirmed until that action occurs
    //
    //  The optin action can only be performed once using this API and any additional attempts will
    //  result in error
    //
    //  @param  String  phn  (required)
    //  @param  String  key  (optional)
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
	require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
	$tr = new TextRipple();


    // Perform optin action and echo response
    $optin = $tr->optin("8885551212");
    echo $optin;
    
?>