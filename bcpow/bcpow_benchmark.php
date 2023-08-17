<?php


use Random\Randomizer;

$randomNumbers = [];
$randomEngine = new Random\Engine\Mt19937(2213131);

$randomizer = new Randomizer($randomEngine);

foreach (range(0, 500000) as $random) {
    $randomNumbers[] = (string)$randomizer->getInt(1, 100000);
    $randomNumbers[] = $randomizer->getInt(1, 100000) . '.' . $randomizer->getInt(1000, 10000);
}

for ($j = 0; $j < 10; $j++) {
    $start = microtime(true);

    foreach (range(0, 1000000) as $randomNumberKey) {
        bcpow($randomNumbers[$randomNumberKey],16);
    }

    $end = microtime(true);
    $executionTime = $end - $start;

    echo "Execution time: " . round($executionTime, 4) . " seconds\n";
}
