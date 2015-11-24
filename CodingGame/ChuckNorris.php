<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/
//$MESSAGE = stream_get_line ( STDIN, 100, "\n" );
$MESSAGE = "%";
$messageToSolve = '';
$asciiToBinary = "";
for($i = 0; $i < strlen ( $MESSAGE ); $i ++) {
	
	$messageToAscii = (string)ord( $MESSAGE [$i] );
	$asciiToBinary = (string)decbin ( (string)$messageToAscii );
	
	$messageToSolve .= str_pad($asciiToBinary, 7, '0', STR_PAD_LEFT);
	echo $messageToSolve . PHP_EOL;
}

$result = "";

solveChuck ( 0, $messageToSolve [0], 0, $messageToSolve, $result);

echo $result;

function solveChuck($currentIndex, $lastBinary, $counter, $someMessage, &$result) {
	if ($currentIndex == strlen ( $someMessage )) {
		if ($lastBinary) {
			$result .= '0 ';
			$result .= str_repeat ( '0', $counter );
		} else {
			$result .= '00 ';
			$result .= str_repeat ( '0', $counter );
		}
		return;
	}
	
	$currentBinary = $someMessage [$currentIndex];
	
	if ($currentBinary != $lastBinary) {
		if ($lastBinary) {
			$result .= '0 ';
			$result .= str_repeat ( '0', $counter );
		} else {
			$result .= '00 ';
			$result .= str_repeat ( '0', $counter );
		}
		
		$result .= ' ';
		$counter = 1;
	} else {
		$counter ++;
	}
	
	solveChuck ( $currentIndex + 1, $currentBinary, $counter, $someMessage, $result);
}