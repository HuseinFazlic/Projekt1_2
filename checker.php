<?php
include 'index.php';
$count = 0;

if($_GET["berlin_wall"] == $prvi)
	$count++;
if($_GET["decade_eiffel"] == $drugi)
	$count++;
if($_GET["beethoven"] == $treći)
	$count++;
if($_GET["country_fought"] == $četvrti)
	$count++;
if($_GET["krakow"] == $peti)
	$count++;
if($_GET["hungary_flag"] == $šesti)
	$count++;

echo "<BR>". $count . "/6";
?>
