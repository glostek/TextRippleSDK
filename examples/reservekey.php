<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  reservekey
    //
    //  * * * * * * *
    //
    //  Reserve ownership of a keyword
    //
    //  NOTE: Your account may be charged for the leasing of additional keywords!!!
    //
    //  * * * * * * *
    //
    //  @param  String  key  (required)
    //  @param  String  sbj  (required) - Subject Line / Identification prefix
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform optin action and echo json response
    $reservekey = $tr->reservekey('someword', 'Business Name');
    echo $reservekey;

    
?>