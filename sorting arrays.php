<?php
// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

// Ascending Order - sort()
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
print_r($cars);

// Descending Order - rsort()
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
print_r($cars);

// Array (Ascending Order), According to Value - asort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
print_r($age);

// Sort Array (Ascending Order), According to Key - ksort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
print_r($age);


// Sort Array (Descending Order), According to Value - arsort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
print_r($age);

// Sort Array (Descending Order), According to Key - krsort()

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
print_r($age);


?>