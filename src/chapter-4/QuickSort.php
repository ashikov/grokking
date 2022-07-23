<?php

namespace Grokking\Chapter4\QuickSort;

function quickSort(array $collection): array
{
    $length = count($collection);
    if ($length < 2) {
        return $collection;
    }

    $less = [];
    $greater = [];

    for ($i = 1; $i < $length; $i += 1) {
        if ($collection[$i] < $collection[0]) {
            $less[] = $collection[$i];
        } else {
            $greater[] = $collection[$i];
        }
    }

    $less = quickSort($less);
    $greater = quickSort($greater);

    return array_merge($less, array($collection[0]), $greater);
}
