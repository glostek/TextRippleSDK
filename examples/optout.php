<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  optout
    //
    //  * * * * * * *
    //
    //  The optout action cancels the enrollment of a phone number within a text club
    //
    //  This action is irreversible and a phone number may only rejoin/opt back in using 
    //  their mobile phone
    //
    //  No SMS is sent to the phone number from this action
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
    $optout = $tr->optout("8885551212");
    echo $optout;
    
?>