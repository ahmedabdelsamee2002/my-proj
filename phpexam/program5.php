<?php

function removeDuplicates($sortedList)
{
    $uniqueList = [];

    $uniqueList[] = $sortedList[0];

    $length = count($sortedList);

    for ($i = 1; $i < $length; $i++) {
        if ($sortedList[$i] != $sortedList[$i - 1]) {
            $uniqueList[] = $sortedList[$i];
        }
    }

    return $uniqueList;
}

$sortedList = [1, 2, 2, 3, 4, 4, 4, 5, 5]; // Replace with your sorted list

$uniqueList = removeDuplicates($sortedList);

echo "Original Sorted List: " . implode(", ", $sortedList) . "\n";
echo "List with Duplicates Removed: " . implode(", ", $uniqueList);

?>