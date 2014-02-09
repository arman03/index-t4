<?php
include("engine/config.php");
if(isset($_POST['playerName']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['server'])){
	echo 'Please wait...';
	$name = $_POST['playerName'];
	$password = $_POST['password'];
	$position = $_POST['position'];
	$tribe = $_POST['tribe'];
	$email = $_POST['email'];
	$server = preg_replace('/[^0-9]/','',$_POST['server']);
	include ('engine/includes/select.php');
	if($select != 'undifend'){
		$link = $select.'_link';$link = $$link;
		$version = $select.'_version';$version = $$version;
	}
	$body = "<DOCTYPE HTML><html><body";
	$body .= " onload='document.forms[\"frm0\"].submit();'";
	$body .= "><form action='$link/".($version == 4 ? 'anmelden.php' : 'register.php')."' method='post' id='frm0'>";
	if($version == 4){
		$body .= "<input type='hidden' name='name' value='$name'/>";
		$body .= "<input type='hidden' name='email' value='$email'/>";
		$body .= "<input type='hidden' name='pw' value='$password'/>";
		$body .= "<input type='hidden' name='vid' value='$tribe'/>";
		$body .= "<input type='hidden' name='kid' value='$position'/>";
		$body .= "<input type='hidden' name='agb' value='1'/>";
		$body .= "<input type='hidden' name='ft' value='a1'/>";
		$body .= "<input type='hidden' name='s1' value='anmelden'/>";
	}
	elseif($version == 3){
		$body .= "<input type='hidden' name='name' value='$name'/>";
		$body .= "<input type='hidden' name='email' value='$email'/>";
		$body .= "<input type='hidden' name='pwd' value='$password'/>";
		$body .= "<input type='hidden' name='tid' value='$tribe'/>";
		$body .= "<input type='hidden' name='kid' value='$position'/>";
	}
	$body .= "</form></body></html>";
	echo $body;
}
?>