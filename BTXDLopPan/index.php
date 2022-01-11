<?php
include_once "Pan.php";

$pan1 = new Pan();
$pan2 = new Pan();
$pan1->setOn(true);
$pan1->setSpeed(2);
$pan1->setRadius(10);
$pan1->setColor("Yellow");

//$pan2->setOn();
$pan2->setSpeed(2);
$pan2->setRadius(10);
$pan2->setColor("Yellow");

echo $pan1->toString();
echo "<br>";
echo $pan2->toString();