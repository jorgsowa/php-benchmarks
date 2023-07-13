<?php
$scaleFactor = 500_000_000;

for($j = 0; $j < 10; $j++) {
    $start = microtime(true);

    for ($i = 0; $i < $scaleFactor; $i++) {
        round(mt_rand(), 4);
    }

    $end = microtime(true);
    $executionTime = $end - $start;

    echo "Execution time: " . round($executionTime, 4) . " seconds\n";
}
