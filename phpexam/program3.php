<?php

function generateUniqueRandomNumbers($min, $max, $count)
{
    if (($max - $min + 1) < $count) {
        return false;
    }

    $numbers = range($min, $max);
    shuffle($numbers);

    return array_slice($numbers, 0, $count);
}

$min = 1; // Minimum value of the range
$max = 10; // Maximum value of the range
$count = 5; // Number of unique random numbers to generate

$randomNumbers = generateUniqueRandomNumbers($min, $max, $count);

if ($randomNumbers === false) {
    echo "Cannot generate unique random numbers within the specified range.";
} else {
    echo "Unique Random Numbers: " . implode(", ", $randomNumbers);
}

?>