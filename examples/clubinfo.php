<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  clubinfo
    //
    //  * * * * * * *
    //
    //  Retrieve summary information about a keyword
    //
    //  * * * * * * *
    //
    //  @param  String  ticket  (optional) - Required if not specified in class or constructor 
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform optin action and echo json response
    $clubinfo = $tr->clubinfo();
    echo $clubinfo;

    
?>