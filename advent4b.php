<?php

$start = 264793;
$end = 803935;

$count = 0;

for ($i = $start; $i <= $end; $i++) {
    $iString = (string) $i;
    if (ContainsSame($iString) && Increasing($iString))
    {
        echo "..$iString\r\n";
        $count++;
    }
}

echo "Count: $count\r\n";


function ContainsSame($input) {
    $len = strlen($input);
    for ($i = 1; $i < $len; $i++) {
        if ($input{$i} === $input{$i-1})
        {
            $count = 1;
            $char = $input{$i};
            while ($i < $len && $input{$i} == $char)
            {
                $count++;
                $i++;
            }
            
            if ($count == 2) {
                return true;
            }
        }
    }

    return false;
}

function Increasing($input) {
    $len = strlen($input);
    $prev = $input{0};
    for ($i = 1; $i < $len; $i++) {
        if ($input{$i} < $prev)
        {
            return false;
        }

        $prev = $input{$i};
    }

    return true;
}