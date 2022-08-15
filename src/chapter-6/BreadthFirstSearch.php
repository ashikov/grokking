<?php

namespace Grokking\BreadthFirstSearch;

const PATTERN = '/^\[porn_seller\]/';

function isPersonPornSeller(string $person): bool
{

    $result = preg_match(PATTERN, $person);

    if ($result === false) {
        throw new \Exception('Something wrong with preg_match()');
    }

    return (bool) $result;
}

function search(array $graph, string $name): bool
{
    $searchQueue = $graph[$name];
    $searched = [];

    while (!empty($searchQueue)) {
        $person = array_shift($searchQueue);
        if (!in_array($person, $searched)) {
            if (isPersonPornSeller($person)) {
                $personNameWithoutTag = preg_replace(PATTERN, '', $person);
                print_r("{$personNameWithoutTag} is a porn seller!");

                return true;
            } else {
                $searchQueue = [...$searchQueue, ...$graph[$person]];
                $searched[] = $person;
            }
        }
    }

    return false;
}
