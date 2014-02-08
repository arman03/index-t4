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

$myFile = "../../engine/config/info.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$title = \'TRAVIANB\';
$description = \'\';
$keywords = \'\';
$forum_link = \'\';
$header = \'\';
$footer = \'\';
$active = true;
$offline_message = \'<p>سایت به منظور به روزرسانی تا اطلاع ثانوی غیرفعال می باشد، لطفا بعدا مراجعه فرمایید.</p>

<p>مدیر سایت</p>\';
?>';
fwrite($fh, $stringData);
fclose($fh);
?>