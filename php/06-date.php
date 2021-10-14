<?php

    echo date('d'); //Day
    echo date('m'); //Month
    echo date('Y'); //Year
    echo date('l').'<br>'; //Day of the week

    echo date('Y/m/d').'<br>';
    echo date('m-d-Y').'<br>';

    echo date('h').":"; //Hour
    echo date('i').":"; //Min
    echo date('s')." "; //Seconds
    echo date('a').'<br>'; //AM or PM

    date_default_timezone_set('America/Vancouver');
    date_default_timezone_set('Europe/Istanbul');
    echo date('h:i:sa').'<br>';

    //Unix Epoch time - from January 1 1970 00:00:00 GMT
    $timestamp = mktime(10,14,59,9,10,1990);
    echo $timestamp.'<br>';

    // echo date('d/m/Y h:i:sa', $timestamp);

    $timestamp2 = strtotime('7:00pm March 23 2021');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 days');

    echo $timestamp5.'<br>';
    echo date('d/m/Y h:i:sa', $timestamp5);