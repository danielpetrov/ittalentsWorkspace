<?php

echo findMaxIndex([1,5,3], 0, -414151);

function findMaxIndex($array, $index, $max, $indexOfMaxNumber = -1)
{
	if ($index == count($array)) {
		return $indexOfMaxNumber;
	}

	if ($max < $array[$index]) {
		$max = $array[$index];
		$indexOfMaxNumber = $index;
	}

	return findMaxIndex($array, $index + 1, $max, $indexOfMaxNumber);
}