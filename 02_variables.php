<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; // String // Can be single or double quotes
$age = 40; // Integer
$hasKids = true; // Boolean
$cashOnHand = 10.5; //Float

$nameList = array(
    'zul', 'tan'
);

echo '<h2>Hello ' . $nameList[1] . '</h2>';

var_dump($nameList);

var_dump($cashOnHand);

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "$name is $age years old";
echo '$name is $age years old'; //single quote for this statement is not working

// Better to do this
echo "${name} is ${age} years old";

// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Arithmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);

$test =  '5' + '5'; //********* be aware of this in php *********
var_dump($test);

echo '5' . '5';
echo '5' + '5';

?>

<h1>Hello <?php echo $nameList[0]; ?> world.....</h1> 