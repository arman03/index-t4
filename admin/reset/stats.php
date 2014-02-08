<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ../login.php');
   exit;
}

$myFile = "../../engine/config/stats.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$mysql_server = \'\';
$stats_servers = 0;
$stats_server1 = array(\'\',\'\',\'\',\'\');
$stats_server2 = array(\'\',\'\',\'\',\'\');
$stats_server3 = array(\'\',\'\',\'\',\'\');
$stats_server4 = array(\'\',\'\',\'\',\'\');
$stats_server5 = array(\'\',\'\',\'\',\'\');
$stats_server6 = array(\'\',\'\',\'\',\'\');
$stats_server7 = array(\'\',\'\',\'\',\'\');
$stats_server8 = array(\'\',\'\',\'\',\'\');
$stats_server9 = array(\'\',\'\',\'\',\'\');
$stats_server10 = array(\'\',\'\',\'\',\'\');
?>';
fwrite($fh, $stringData);
fclose($fh);

include('done.php');
?>