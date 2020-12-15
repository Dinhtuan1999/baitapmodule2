<?php
include_once "index.php";

$stopwatch = new StopWatch();


$stopwatch->start();
$time1 = $stopwatch->getElapsedTime();
echo $time1 . "<br>";
echo "Start time: " . $stopwatch->getStartTime() . "<br>";

$arr = [];
for ($i = 0; $i <= 10000; $i++) {
    array_push($arr, $i);
}

$new_arr = $stopwatch->selection_sort($arr);

$stopwatch->stop();
$time2 = $stopwatch->getElapsedTime();
echo $time2 . "<br>";
echo "End time: " . $stopwatch->getEndTime();


print("<pre>" . print_r($stopwatch->mstoDate($time2 - $time1), true) . "</pre>");


print("<pre>" . print_r($new_arr, true) . "</pre>");


