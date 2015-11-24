<?php

echo xPowerOfY(2, 6);

function xPowerOfY($x, $y){
	//x * x * x // y == 3 - > x * power(x, y - 1)
	if ($y == 0) {
		return 1;
	}
	
	return $x * xPowerOfY($x, $y - 1);
}