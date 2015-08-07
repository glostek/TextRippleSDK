<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  members
    //
    //  * * * * * * *
    //
    //  Get all live phone numbers and demographic information for a keyword
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