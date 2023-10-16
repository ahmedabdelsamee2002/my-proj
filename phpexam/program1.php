<?php

function fibonacciSeries($n)
{
    $fibSeries = [];

    $fibSeries[0] = 0;
    $fibSeries[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibSeries[$i] = $fibSeries[$i - 1] + $fibSeries[$i - 2];
    }

    return $fibSeries;
}

$n = 10; // Replace with the number of Fibonacci numbers you want to generate

$fibonacci = fibonacciSeries($n);

echo "Fibonacci Series:\n";
foreach ($fibonacci as $number) {
    echo $number . " ";
}

?>