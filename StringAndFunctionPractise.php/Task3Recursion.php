<?php
echo findMax([1,2,3], 0, -414151);

function findMax($array, $index, $max)
{
	if ($index == count($array)) {
		return $max;
	}
	
	if ($max < $array[$index]) {
		$max = $array[$index];
	}
	
	return findMax($array, $index + 1, $max);
}