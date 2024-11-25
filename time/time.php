<?php

date_default_timezone_set('Europe/Kyiv');
$startDate = strtotime('2023-12-31 20:00:00');
$endDate = strtotime('2024-12-31 20:00:00');

$timeRemaining = $endDate - $startDate;
echo "Акція розпочалась 2023-12-31 20:00:00";
if ($timeRemaining <= 0) {
    echo "<h2>Акція закінчилась!</h2>";
} else {
    $days = floor($timeRemaining / (60 * 60 * 24));
    $hours = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($timeRemaining % (60 * 60)) / 60);
    $seconds = $timeRemaining % 60;

    
    echo "<p> Акція закінчиться: <span id='timer'>$days днів, $hours годин, $minutes хвилин, $seconds  секунд </span>.</p>";
}
?>