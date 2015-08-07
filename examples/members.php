<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  members
    //
    //  * * * * * * *
    //
    //  Removes a keyword from your account and archive any existing opt-ins
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
    $members = $tr->members('oneofmykeywords');
    echo $members;

    
?>