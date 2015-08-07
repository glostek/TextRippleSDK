<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  ticketinfo
    //
    //  * * * * * * *
    //
    //  Retrieve status information from a ticket created from the 'send' action
    //
    //  * * * * * * *
    //
    //  @param  String  ticket  (required)
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform optin action and echo json response
    $ticketinfo = $tr->ticketinfo('AAAA-BBBB-CCCC-DDDD');
    echo $ticketinfo;

    
?>