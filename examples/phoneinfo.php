<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  phoneinfo
    //
    //  * * * * * * *
    //
    //  Retrieve demographic information from a single phone numbrer
    //
    //  * * * * * * *
    //
    //  @param  String  phn  (required)
    //  @param  String  key  (optional) - Required if not specified in class or constructor
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform action and echo json response
    $phoneinfo = $tr->phoneinfo('8885551212');
    echo $phoneinfo;

    
?>