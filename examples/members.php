<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  members
    //
    //  * * * * * * *
    //
    //  Get all live phone numbers and demographic information for a keyword
    //  If dates are included but in an unsupported format, an error will occur
    //
    //  * * * * * * *
    //
    //  @param  String  beg  (optional) - Expects date in YYYY-MM-DD or empty string if included
    //  @param  String  end  (optional) - Expects date in YYYY-MM-DD or empty string if included
    //  @param  String  key  (optional) - Required if not specified in class or constructor
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Get all members of a text club
    $members = $tr->members();
    echo $members;


    // Get all members of a text club after a specific date
    $members = $tr->members('2014-01-01');
    echo $members;


    // Get all members of a text club before a specific date
    $members = $tr->members('', '2014-01-01');
    echo $members;


    // Get all members of a text club between two dates
    $members = $tr->members('2014-01-01', '2016-01-01');
    echo $members;

?>