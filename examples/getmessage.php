<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  getmessage
    //
    //  * * * * * * *
    //
    //  Get standard text message
    //
    //  * * * * * * *
    //
    //  @param  String  key  (optional) - Required if not specified in class or constructor
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform action and echo json response
    $getmessage = $tr->getmessage();
    echo $getmessage;

?>