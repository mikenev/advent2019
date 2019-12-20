<?php

$idx = 0;
$max = 100;

for ($noun = 0; $noun < $max; $noun++) {
	for ($verb = 0; $verb < $max; $verb++) {
		$values = array(1,0,0,3,1,1,2,3,1,3,4,3,1,5,0,3,2,1,10,19,1,6,19,23,1,10,23,27,2,27,13,31,1,31,6,35,2,6,35,39,1,39,5,43,1,6,43,47,2,6,47,51,1,51,5,55,2,55,9,59,1,6,59,63,1,9,63,67,1,67,10,71,2,9,71,75,1,6,75,79,1,5,79,83,2,83,10,87,1,87,5,91,1,91,9,95,1,6,95,99,2,99,10,103,1,103,5,107,2,107,6,111,1,111,5,115,1,9,115,119,2,119,10,123,1,6,123,127,2,13,127,131,1,131,6,135,1,135,10,139,1,13,139,143,1,143,13,147,1,5,147,151,1,151,2,155,1,155,5,0,99,2,0,14,0);
	
		$values[1] = $noun;
		$values[2] = $verb;

		if (RunArray($values) == 19690720) {
			echo "Result: $noun, $verb\r\n";
		}
	}
}

function RunArray($values) {
	$idx = 0;
	$count = count($values);

	for ($idx = 0; $idx <= $count; $idx += 4) {
	
		//print_r($values);
	
		$command = $values[$idx];
	
		//echo "$idx : command : " . $command . "\r\n";
	
		$idxA = $values[$idx + 1];
		$idxB = $values[$idx + 2];
		$idxR = $values[$idx + 3];
	
		if ($command == 1) {
			$values[$idxR] = $values[$idxA] + $values[$idxB];
		} 
		else if ($command == 2) {
			$values[$idxR] = $values[$idxA] * $values[$idxB];
		}
		else if ($command == 99) {
			return $values[0];
		}
	}

	return 0;
}