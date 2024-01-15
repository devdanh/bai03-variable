<?php
$a = 5;
$A = 10;
echo $a;
echo '<br>';
echo $A;
echo '<br>';

define('PI', 3.14);
echo PI;
echo '<br>';

$str = "Hello World";
echo $str;
echo '<br>';

$firstName = 'Nguyen';
$lastName = 'Van An';
$fullName = $firstName . ' ' . $lastName;
echo $fullName;
echo '<br>';

var_dump($a);
echo '<br>';

$x = 10.365;
var_dump($x);
echo '<br>';

$cars = array('Toyota', 'Bmw', 'Volvo');
var_dump($cars);
echo '<br>';

$b = $a . 'hello';
var_dump($b);
echo '<br>';

$c = 5.6;
$B = (int)$c;
var_dump($B);
echo '<br>';

$C = '5';
// settype($C, 'integer');
var_dump($C);
echo '<br>';
echo gettype($C);
