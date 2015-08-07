<?php
    
    ///////////////////////////////////////////////////////////////////////////////////////////////
    //
    //  ipush
    //
    //  * * * * * * *
    //
    //  Information push or ipush allows you to assign certain datum to a phone number
    //
    //  * * * * * * *
    //
    //  @param  String  phn  (required)
    //  @param  Array   arr  (required) - Associative array of demographic information (see below)
    //  @param  String  key  (optional) - Required if not specified in class or constructor
    //
    //  * * * * * * *
    //
    //  Available datum points
    //  ----------------------
    //   firstname - varchar(16)    
    //   lastname - varchar(21) 
    //   email - varchar(255)
    //   gender - char(1) m/f
    //   address - varchar(100)
    //   city - varchar(100)
    //   county - varchar(100)
    //   state - varchar(2)
    //   zipcode - varchar(9)
    //   country - varchar(2) 
    //   lat - decimal(6,3)
    //   lng - decimal(6,3)      
    //   dob - date - yyyy-mm-dd        
    //   anniversary - date - yyyy-mm-dd
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////


    // Include Text Ripple class
    require_once("../src/TextRipple.php");


    // Instantiate Text Ripple
    $tr = new TextRipple();


    // Perform action and echo json response
    $ipush = $tr->ipush('8885551212', array(
        'firstname' => 'Fred',
        'lastname'  => 'Flintstone'
    ));
    echo $ipush;

    
?>