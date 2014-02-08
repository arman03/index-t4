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

$myFile = "../../engine/config/servers.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$server_one_name = \'\';
$server_one_link = \'\';
$server_one_speed = \'\';
$server_one_reward = true;
$server_one_version = 3;
$server_one_enable = false;
$server_two_name = \'\';
$server_two_link = \'\';
$server_two_speed = \'\';
$server_two_reward = true;
$server_two_version = 3;
$server_two_enable = false;
$server_three_name = \'\';
$server_three_link = \'\';
$server_three_speed = \'\';
$server_three_reward = true;
$server_three_version = 3;
$server_three_enable = false;
$server_four_name = \'\';
$server_four_link = \'\';
$server_four_speed = \'\';
$server_four_reward = true;
$server_four_version = 3;
$server_four_enable = false;
$server_five_name = \'\';
$server_five_link = \'\';
$server_five_speed = \'\';
$server_five_reward = true;
$server_five_version = 3;
$server_five_enable = false;
$server_six_name = \'\';
$server_six_link = \'\';
$server_six_speed = \'\';
$server_six_reward = true;
$server_six_version = 3;
$server_six_enable = false;
$server_seven_name = \'\';
$server_seven_link = \'\';
$server_seven_speed = \'\';
$server_seven_reward = true;
$server_seven_version = 3;
$server_seven_enable = false;
$server_eight_name = \'\';
$server_eight_link = \'\';
$server_eight_speed = \'\';
$server_eight_reward = true;
$server_eight_version = 3;
$server_eight_enable = false;
$server_nine_name = \'\';
$server_nine_link = \'\';
$server_nine_speed = \'\';
$server_nine_reward = true;
$server_nine_version = 3;
$server_nine_enable = false;
$server_ten_name = \'\';
$server_ten_link = \'\';
$server_ten_speed = \'\';
$server_ten_reward = true;
$server_ten_version = 3;
$server_ten_enable = false;
?>';
fwrite($fh, $stringData);
fclose($fh);

include('done.php');
?>