<?php
	if(!isset($_GET['s'])) {
	$_GET['s'] = ""; }
	if ($_GET['s'] == "") {
	include("engine/tutorial/1.php"); }
	if ($_GET['s'] == "1") {
	include("engine/tutorial/1.php"); }
	if ($_GET['s'] == "2") {
	include("engine/tutorial/2.php"); }
	if ($_GET['s'] == "3") {
	include("/engine/tutorial/3.php"); }
	if ($_GET['s'] == "4") {
	include("engine/tutorial/4.php"); }
	if ($_GET['s'] == "5") {
	include("engine/tutorial/5.php"); }
?>