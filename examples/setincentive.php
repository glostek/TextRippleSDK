<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  setincentive
    //
    //  * * * * * * *
    //
    //  Set opt-in incentive text message.
    //  The opt-in incentive text message is what people receive when opting into a text club.
    //  The opt-in incentive text message should could an offer to attract enrollment
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
    $txt = 'Thank you for joining our text club. Show this text to receive a special BOGO on your next visit!';


    // Perform action and echo json response
    $setincentive = $tr->setincentive($txt);
    echo $setincentive;

    
?>