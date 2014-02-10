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

$myFile = "../../engine/config/confirmation.php";
$fh = fopen($myFile, 'w') or die("can't open file");
$stringData = '<?php
$confirmation = \'\';
$esra = false;
?>';
fwrite($fh, $stringData);
fclose($fh);

include('done.php');
?>