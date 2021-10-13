<?php

    /*
        - For
        - While
        - Do..While
        - Foreach
    */

    #For loop
    # @params - init | condition | inc/decr
    echo("For loop " . '<br>');
    for($i = 0; $i < 10; $i++){
        echo($i . '<br>');
    };

    #While loop
    # @params = condition
    echo("While loop " . '<br>');
    $i = 0;
    while($i < 10){
        echo($i . '<br>');
        $i++;
    };

    #Do..While
    #@params - condition //do will always run once no matter what
    echo("Do...while loop " . '<br>');

    $j = 0;
    do{
        echo($j . '<br>');
        $j++;
    }
    while($j < 10);

    #Foreach
    echo("Foreach loop: indexed " . '<br>');

    $people = array('Brad','Jose','William');

    foreach($people as $person){
        echo($person . '<br>');
    };

    echo("Foreach loop: associative" . '<br>');
    $people2 = array('Brad' => 'brad@mail.com', 'Jose' => 'jose@mail.com', 'William' => 'william@mail.com');

    foreach($people2 as $person => $email){
        echo($person.' : '.$email.'<br>');
    }