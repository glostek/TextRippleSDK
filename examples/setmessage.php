<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  setmessage
    //
    //  * * * * * * *
    //
    //  Set standard text message.
    //
    //  The standard text message is what people receive if no incentive message is defined
    //  or for any mobile originated response if the recipient is already part of the text club
    //
    //  * * * * * * *
    //
    //  @param  String  txt  (required)
    //  @param  String  key  (optional) - Required if not specified in class or constructor
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();

    // Text Message
    // Max 120 characters. The business name is automatically prepended to the return message
    $txt = 'Thank you again for being a part of our text club. Any questions or comments please call us at 888-555-1212.';


    // Perform action and echo json response
    $setmessage = $tr->setmessage($txt);
    echo $setmessage;

    
?>