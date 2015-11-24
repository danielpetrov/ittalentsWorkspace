<?php

function calculateArea($r){
	if ($r < 0) {
		return 0;
	}
	return pi() * pow ($r, 2);
}

echo calculateArea(2);