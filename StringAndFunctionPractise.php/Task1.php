<?php
/*Задача 1: Да се състави програма, чрез която се въвеждат два низа съдържащи
до 40 главни и малки букви.
Като резултат на екрана да се извеждат низовете само с главни и само
с малки букви.
Пример: Abcd Efgh
Изход: ABCD abcd EFGH efgh */

require_once 'Readline.php';

$firstString = readline("Enter First String" . PHP_EOL);

$secondString = readline("Enter Second String" . PHP_EOL);

$firstStringToLower = strtolower($firstString);
$firstStringToUpper = strtoupper($firstString);

$secondStringToLower = strtolower($secondString);
$secondStringToUpper = strtoupper($secondString);

echo $firstStringToLower, " ", $firstStringToUpper, " ", $secondStringToLower, " ", 
$secondStringToUpper;

