<?php



$startDate = time(); 
$endDate = strtotime("10 September 2024");

$timeRemaining = $endDate - $startDate;

echo date("l d F Y h:i:s A", $startDate);

if ($timeRemaining <= 0) {
    echo "<h2>Акція закінчилась!</h2>";
} else {
    $days = floor($timeRemaining / (60 * 60 * 24));
    $hours = floor(($timeRemaining % (60 * 60 * 24)) / (60 * 60));
    $minutes = floor(($timeRemaining % (60 * 60)) / 60);
    $seconds = $timeRemaining % 60;

    echo "<p>Акція закінчиться через: <span id='timer'>$days днів, $hours годин, $minutes хвилин, $seconds секунд</span>.</p>";
}
?>