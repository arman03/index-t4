<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: login.php');
   exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
   header('Location: login.php');
   exit;
}
if (session_id() == "")
{
   session_start();
}
?>
<!DOCTYPE html>
<html dir="rtl">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>کنترل پنل ادمین</title>

		<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="elfinder/css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="elfinder/css/theme.css">

		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="elfinder/js/elfinder.min.js"></script>

		<!-- elFinder translation (OPTIONAL) -->
		<script type="text/javascript" src="elfinder/js/i18n/elfinder.ru.js"></script>

		<!-- elFinder initialization (REQUIRED) -->
		<script type="text/javascript" charset="utf-8">
			$().ready(function() {
				var elf = $('#elfinder').elfinder({
					url : 'elfinder/php/connector.php'  // connector URL (REQUIRED)
					// lang: 'ru',             // language (OPTIONAL)
				}).elfinder('instance');
			});
		</script>
		</head>
		<body>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="logoutform" id="logoutform">
          <p>
    <input type="submit" name="logout'" id="logout'" value="خروج">
    <input name="form_name" type="hidden" id="form_name" value="logoutform">
  </p>
        </form>
<p>
          <input type="button" name="button" id="button" value="بازگشت" onClick="window.location='index.php'">
        </p>
<h3>فایل منیجر:</h3>
<!-- Element where elFinder will be created (REQUIRED) -->
<div id="elfinder"></div>
</body>
</html>