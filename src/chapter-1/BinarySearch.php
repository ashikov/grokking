<?php

namespace Grokking\BinarySearch;

// Function returns index
function binarySearch(array $haystack, mixed $niddle): mixed
{
    // Search borders
    $firstIndex = 0;
    $lastIndex = count($haystack) - 1;

    while ($firstIndex <= $lastIndex) {
        $middleIndex = $firstIndex + $lastIndex;

        if ($haystack[$middleIndex] === $niddle) {
            return $middleIndex;
        }

        if ($haystack[$middleIndex] > $niddle) {
            $lastIndex = $middleIndex - 1;
        } else {
            $firstIndex = $middleIndex + 1;
        }
    }

    return null;
}
