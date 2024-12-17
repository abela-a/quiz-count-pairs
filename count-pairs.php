<?php

function countPairs(array $numbers, int $target): int {
    $count = 0;
    $seen = [];
    $pairs = [];

    foreach ($numbers as $number) {
        $diff = $target - $number;

        if (isset($seen[$diff]) && !isset($pairs["$diff,$number"])) {
            $count++;

            $pairs["$diff,$number"] = true;
            $pairs["$number,$diff"] = true;
        }

        $seen[$number] = true;
    }

    return $count;
}

echo countPairs([1, 3, 2, 2, 3, 4], 5) . PHP_EOL; // Output: 2
echo countPairs([1, 1, 1, 1], 2) . PHP_EOL; // Output: 1
echo countPairs([1, 2, 3, 4, 5], 7) . PHP_EOL; // Output: 2
