<?php
$today = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
$tomorrow = mktime(0, 0, 0, date("m"), date("d")+1 , date("Y"));
echo"Акція розпочалась:" . date("M-d-Y", $today) ; 
echo"Акція завершиться:" . date("M-d-Y", $tomorrow) ; 
if($today ==$tomorrow)  {
    echo "Акція закінчилася";
}
if($today !==$tomorrow)  {
    echo "Акція триває";
}
