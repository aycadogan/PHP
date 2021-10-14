<?php

#Conditionals

    /*
        ==
        ===
        <
        >
        <=
        >=
        !=
        !==
    */

$num = 4;

if($num == 5){
    echo '5 passed';
}elseif($num == 6){
    echo '6 passed';
}else{
    echo 'did not pass';
}

echo '<br>';

//Nesting IF

$num2 = 9;

if($num2 > 4){
    if($num2 < 10){
        echo "$num passed<br>";
    }else{
        echo "yadayadayada<br>";
    }
}

#Logical operators
/*
    and &&
    or ||
    xor 
*/

if($num2 > 4 XOR $num2 < 10){
    echo "XOR<br>";
    echo "$num2 passed<br>";
}else{
    echo "$num2 failed XOR gate<br>";
}


#Switch
$favColor = 'yellow';

switch($favColor){
    case 'red':
        echo 'Your fav color is red';
        break;
    case 'blue':
        echo 'Your fav color is blue';
        break;
    default:
        echo 'Your fav color is something else....';
}
