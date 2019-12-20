<?php

function RunComputer(&$values, $inputs = "") {
	$idx = 0;
	$inputIdx = 0;

	$count = count($values);

	for ($idx = 0; $idx <= $count;) {
		$command = $values[$idx] % 100;
		$modes = strrev((string)floor($values[$idx] / 100));

		// mode 0 is position mode, store result at position.
		// mode 1 is immediate mode, use the value at position.

		echo "$idx:command:" , $command , "mode:", $modes, "\r\n";

		$idxA = $values[$idx + 1];
		$idxB = $values[$idx + 2];
		$idxR = $values[$idx + 3];

		if ($command == 1) { // add
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$values[$idxR] = $val1 + $val2;
			$idx += 4;
		} 
		else if ($command == 2) { //multiply
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$values[$idxR] = $val1 * $val2;
			$idx += 4;
		}
		else if ($command == 3) { // input
			if (is_array($inputs)) {
				$values[$idxA] = $inputs[$inputIdx++];
			}
			else {
				$values[$idxA] = (int) readline("Enter value: ");
			}

			$idx += 2;
		}
		else if ($command == 4) { // output
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			echo "Output: ", $val1, "\r\n";
			$idx += 2;
			return $val1;
		}
		else if ($command == 5) { // jump if true
			 $val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$idx = ($val1) ? $val2 : $idx + 3;
		}
		else if ($command == 6) { // jump if false
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$idx = (!$val1) ? $val2 : $idx + 3;
		}
		else if ($command == 7) { // less than
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$values[$idxR] = $val1 < $val2 ? 1 : 0;
			$idx += 4;
		}
		else if ($command == 8) { // equals
			$val1 = $modes{0} == 0 ? $values[$idxA] : $values[$idx + 1];
			$val2 = $modes{1} == 0 ? $values[$idxB] : $values[$idx + 2];
			$values[$idxR] = $val1 == $val2 ? 1 : 0;
			$idx += 4;
		}
		else if ($command == 99) {
        		print "Done: " . $values[0] . "\r\n";
		}
    }
    
    return $values;
}

