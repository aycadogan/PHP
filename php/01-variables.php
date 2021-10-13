<h1>
<?php
echo "Hello World!";
?></h1>

<?php
//Single line comment
#Single line comment
/*
    Multiline
    comment
*/
echo "wassup\n";
echo '<br>';
print 'Yokoso warudo';
echo '<br>';

#Variables
/* 
    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers and underscores
    - Case sensitive
*/

#Data types
/*
    - String
    - Integers
    - Floats
    - Booleans
    - Arrays
    - Objects
    - NULL
    - Resource (a return or reference to a function, not a data type)
*/

$output1 = 'Privet Mir1\n';
echo $output1;
echo nl2br($output1);
//nl2br -> for the next line

$output2 = "Privet Mir2\n";
echo $output2;
echo nl2br($output2);

$num1 = 4;
$float1 = 3.2;
$bool1 = true;

$num2 = 10;
$sum = $num1 + $num2;
echo $sum;
echo '<br>';

$string1 = "Guten";
$string2 = "Morgen";
//$greeting = $string1 + $string2;
//echo $greeting; // this is an error

$greeting2 = $string1 . $string2 ;
//For concetanation " . " not +
echo $greeting2;
$greeting3 = $greeting2 . '<br>';
echo $greeting3;
echo "TEST";
echo '<br>';

$greeting4 = 'They\'re here!' . '<br>';
echo $greeting4;

#Constant
define('HOLA', 'Hello Everyone');
echo HOLA;
// echo hola; //case sensitive
?>

