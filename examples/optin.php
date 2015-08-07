<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  optin
    //
    //  * * * * * * *
    //
    //  Before text messages can be sent to a recipient, there must be consent
    //
    //  The optin action sends a mobile terminated sms to the recipient's handset which asks them
    //  to respond YES to confirm enrollment in your text club
    //
    //  The recipient must respond YES to confirm enrollment and the recipient is considered
    //  unconfirmed until that action occurs
    //
    //  The recipient will receive either the opt-in incentive or standard return message from
    //  your account when responding YES
    //
    //  The optin action can only be performed once using this API and any additional attempts will
    //  result in error
    //
    //  See the 'send' action for an alternative way of opting in members
    //
    //  * * * * * * *
    //
    //  @param  String  phn  (required)
    //  @param  String  key  (optional)
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform action and echo json response
    $optin = $tr->optin("8885551212");
    echo $optin;
    
?>