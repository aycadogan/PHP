<?php

#substr() - returns a portion of a string

$output = substr('Hello', 1,3);
//ell
$output = substr('Hello', -2);
//lo
$output = substr('Hello', -4,2);
//el
echo $output.'<br>';

#strlen() - returns the length of a string

$output = strlen('Hello World');
echo $output.'<br>';

#strpos() - finds the position of the first occurence of a sub string

$output = strpos('Hello World', 'o');
    echo $output.'<br>';

    #strrpos() - finrst the position of the last occurence of a sub string

    $output = strrpos('Hello World', 'o');
    echo $output.'<br>';

    #trim() - strips whitespace

    $test = 'Hello World         ';
    echo $test.'<br>';
    var_dump($test);
    echo '<br>';
    
    $trimmed = trim($test);
    var_dump($trimmed);
    echo '<br>';

    #strtoupper
    $output = strtoupper('hello world');
    echo $output.'<br>';

    #strtolower
    $output = strtolower('HELLO WORLD');
    echo $output.'<br>';

    #str_replace()

    $text = 'Hello World';
    $output = str_replace('World', 'Hell', $text);
    echo $output.'<br>';

    #is_string() - checks if string
    $val = 22;
    // $output = is_string($val);
    // echo $output;

    if(is_string($val)){
        echo 'is a string<br>';
    }else{
        echo 'not a string<br>';
    }


    $values = array(true,false,null,'abc',33,'33',22.4,'22.4','',' ', 0, '0');

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string<br>";
        }
    }

    $string= 
    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit ex aliquid a consectetur praesentium illum, quas deserunt similique, ea, odio provident at animi corrupti voluptatem magnam aperiam tenetur esse. Quo!";

    $compress = gzcompress($string);
    echo $compress.'<br>';
    $original = gzuncompress($compress);
    echo $original;