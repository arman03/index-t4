<?php
$total = 0;
$total_active  = 0;
$total_online = 0;
for($i = 1; $i <= $stats_servers; $i++){
	$x = count(${"stats_server".$i});
	for($t = 0; $t <= $x; $t++){
		$prefix =  ${"stats_server".$i}[0];
		$db = ${"stats_server".$i}[1];
		$user = ${"stats_server".$i}[2];
		$pass = ${"stats_server".$i}[3];
	}
	mysql_connect($mysql_server, $user, $pass);
	mysql_select_db($db);
	$total += mysql_num_rows(mysql_query("SELECT * FROM " . $prefix . "users"));
	$total_active += mysql_num_rows(mysql_query("SELECT * FROM " . $prefix . "users WHERE " . time() . "-timestamp < (3600*24) AND tribe!=5 AND tribe!=0"));
	$total_online += mysql_num_rows(mysql_query("SELECT * FROM " . $prefix . "users WHERE " . time() . "-timestamp < (60*60) AND tribe!=5 AND tribe!=0"));
}
?>