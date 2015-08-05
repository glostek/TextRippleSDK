<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  send
    //
    //  * * * * * * *
    //
    //  Deliver a SMS message to recipient
    //
    //  * * * * * * *
    //
    //  The 'send' action also encompasses the functionality of the 'optin' action if the recipient
    //  is NOT opted into 
    //
    //  Unlike the 'optin' action, the recipient will receive the originally intended txt
    //  and NOT the opt-in incentive / standard return message from your account
    //
    //  Please examine the 'optin' action to understand how it operates
    //
    //  * * * * * * *
    //
    //  @param  String   phn  "phone"    (required)
    //  @param  String   txt  "text"     (required)
    //  @param  String   key  "keyword"  (optional) 
    //  @param  Boolean  sbj  "subject"  (optional) - Default is true
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform send action and echo json response
    // Max length of txt is 120 characters because the subject line is included from the account
    // SMS received: "[Business Name]: Hello there. Just a simple text message."
    $send = $tr->send("8885551212", "Hello there. Just a simple text message.");
    echo $send;


    // Perform send action and echo json response
    // Max length of txt is 160 characters because the subject line is NOT included
    // SMS received: "Hello there. Just a simple text message."
    $send = $tr->send("8885551212", "Hello there. Just a simple text message.", "", false);
    echo $send;
    
?>