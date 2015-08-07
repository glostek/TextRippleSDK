<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  keywordavailability
    //
    //  * * * * * * *
    //
    //  Check if a keyword is available/ownership
    //
    //  * * * * * * *
    //
    //  @param  String  key  (required)
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform action and echo json response
    $keywordavailability = $tr->keywordavailability('someword');
    echo $keywordavailability;

    
?>