<?php 

$number = 10;
$otherNumber = 5;

//soma
echo 'Soma: ' . $number + $otherNumber;
echo '<br>';

// subtracao
echo 'Subtracao: ' . $number - $otherNumber;
echo '<br>';

// divisao
echo 'Divisao: ' . $number / $otherNumber;
echo '<br>';

// multipicacao
echo 'Multiplicacao: ' . $number * $otherNumber;
echo '<br>';

//concatenacao
echo 'Numero 1: ' . $number . ' <br>Numero 2: ' . $otherNumber;
echo '<br>';

// atribuição
$number += 1;  
echo '$number += 1: ' . $number;
echo '<br>';

$number -= 5;
echo '$number -= 5: ' . $number;
echo '<br>';

$number *= 2;
echo '$number *= 2: ' . $number;
echo '<br>';

$number /= 3;
echo '$number /= 3: ' . $number;
echo '<br>';

$number %= 3;
echo '$number %= 3: ' . $number;

// <, >, <=, >=, !=, ==, ===
echo '<hr>';
echo '$number: ' . $number;
echo '<br>';
echo '$otherNumber: ' . $otherNumber;
echo '<br><br>';

echo '$number > $otherNumber: '; 
$result = $number > $otherNumber;
var_dump($result);
echo '<hr>';

echo '$number < $otherNumber: '; 
$result = $number < $otherNumber;
var_dump($result);
echo '<hr>';

echo '"5" != $otherNumber: '; 
$result = '5'!= $otherNumber;
var_dump($result);
echo '<hr>';

echo ' "5" !== $otherNumber: '; 
$result = '5' !== $otherNumber;
var_dump($result);
echo '<hr>';

echo ' "5" == $otherNumber: '; 
$result = '5' == $otherNumber;
var_dump($result);
echo '<hr>';

echo ' "5" === $otherNumber: '; 
$result = '5' === $otherNumber;
var_dump($result);
echo '<hr>';
