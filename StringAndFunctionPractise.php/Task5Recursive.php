<?php
function reverse($array, $index, &$reversedArray)
{
	if ($index == count($array - 1)) {
		return $array[$index];
	}
	
	array_unshift($reversedArray, reverse($array, $index +1, $reversedArray));
	
	return $reversedArray;
}
$rev = [];

var_dump(reverse([1,2,3,4,5], 0, $rev));