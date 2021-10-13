<?php
/* 
        - Indexed
        - Associative
        - Multi-dimensional
*/

//Indexed
$people = array('Kevin','Jeremy','Sara');
$ids = array(23,55,12);
$cars = ['Honda', 'Toyota', 'BMW'];

echo print_r($people) . '<br>';
echo print_r($ids) . '<br>';
echo print_r($cars) . '<br>';

echo $people[1] . '<br>';
//echo $people[4]; ->error

echo count($cars) . '<br>';
var_dump($cars);

echo '<br>';
//Associative -> define key and value
$people1 = array('Brad' => 35, 'Jose' => 32, 'William' => 25);
$ids1 = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

echo $people1['Brad'] .'<br>';
echo $ids1[44] . '<br>';

$people1['Jill'] = 18;
echo print_r($people1) . '<br>';
echo $people1['Jill'] . '<br>';

//Multi-dimensional - nested array
$cars1 = array(
        array('Honda', 20, 10), //name | sold | available
        array('Toyota', 5, 20),
        array('Ford', 20, 5)
    );

    echo $cars1[1][2];