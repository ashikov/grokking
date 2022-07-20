<?php

namespace Grokking\GetMax;

function head(array $collection): int
{
    return array_shift($collection);
}

function tail(array $collection): array
{
    return array_slice($collection, 1);
}

function getMax(array $numbers): int
{
    if (empty($numbers)) {
        return 0;
    }

    if (count($numbers) === 1) {
        return head($numbers);
    }

    if (head($numbers) > getMax(tail($numbers))) {
        return head($numbers);
    }

    return getMax(tail($numbers));
}
