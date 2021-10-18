<?php

    //People array
    $people[] = "Steve";
    $people[] = "Alex";
    $people[] = "Alexander";
    $people[] = "Kathy";
    $people[] = "Evan";
    $people[] = "John";
    $people[] = "Linda";
    $people[] = "Greg";
    $people[] = "Brad";
    $people[] = "Mike";

    //Get query string
    $str = $_REQUEST['q'];
    $suggestion = "";

    //Get suggestions
    if($str !== ""){
        $str = strtolower($str);
        $len = strlen($str);

        foreach($people as $person){
            if(stristr($str, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion = $person;
                }else{
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;