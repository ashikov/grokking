<?php

namespace Grokking\SelectionSort;

function getSmallestItemIndex(array $collection): int
{
    [$smallest] = $collection;
    $smallestIndex = 0;
    $collectionLength = count($collection);

    for ($i = 0; $i < $collectionLength; $i += 1) {
        if ($collection[$i] < $smallest) {
            $smallest = $collection[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

# Function sorts array in ascending order
# O(n * n)
function selectionSort(array $collection): array
{
    $result = [];

    $collectionLength = count($collection);

    for ($i = 0; $i < $collectionLength; $i += 1) {
        $smallestItemIndex = getSmallestItemIndex($collection);
        $result[] = $collection[$smallestItemIndex];
        unset($collection[$smallestItemIndex]);

        // Reset keys cause we did unset()
        $collection = array_values($collection);
    }

    return $result;
}
