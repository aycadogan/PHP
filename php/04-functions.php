<?php

/*
        1) Camel Case - myFunction() ***
        2) Lower Case - my_function()
        3) Pascal Case - MyFunction() --- used for classes
*/

function simpleFunction(){
    echo 'Hello World' . '<br>';
};

simpleFunction();

//function with params
function sayHello($name = 'My girl'){
    echo "Hello $name<br>";
};

sayHello('Ayca');
sayHello();

//Return value
function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(5,6) . '<br>';

//By Reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
   $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";

//the number 10($myNum) that you pass to addFive does not change this value that is in memory
//To manipulate the myNum, add & to parameter
// Value: 10
// Value: 20
