<?php

echo fibionacci_with_recursion(15);

function fibionacci_with_recursion($n){
	
	if ($n == 0 || $n == 1) {
		return $n;
	}
	
	return fibionacci_with_recursion($n - 1) + fibionacci_with_recursion($n - 2);
}