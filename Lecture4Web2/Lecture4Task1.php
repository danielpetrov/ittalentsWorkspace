<?php
/* Task1. Write a program that prints all numbers between -100 and 100. Then print them backwards. */
for ($i = -100; $i <= 100; $i++) {
	echo $i . " ";
}
echo PHP_EOL;
for ($i = 100; $i >= -100; $i--) {
	echo $i . " ";
}