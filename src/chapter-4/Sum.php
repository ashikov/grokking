<?php

namespace Grokking\Sum;

function head(array $collection): int
{
    return array_shift($collection);
}

function tail(array $collection): array
{
    return array_slice($collection, 1);
}

function sum(array $numbers): int
{
    if (empty($numbers)) {
        return 0;
    }

    if (count($numbers) === 1) {
        [$number] = $numbers;
        return $number;
    }

    return head($numbers) + sum(tail($numbers));
}
