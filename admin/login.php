<?php
if(!file_exists('../engine/config/admin.php')){
   header('Location: install.php');
   exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['form_name'] == 'loginform')
{
   include('../engine/config/admin.php');
   if (session_id() == "")
   {
      session_start();
   }
   if($_POST['username'] == $username && $_POST['password'])
   {
      $_SESSION['username'] = $_POST['username'];
      $rememberme = isset($_POST['rememberme']) ? true : false;
      if ($rememberme)
      {
         setcookie('username', $_POST['username'], time() + 3600*24*30);
         setcookie('password', $_POST['password'], time() + 3600*24*30);
      }
      header('Location: ./');
      exit;
   }
}
?>
<!doctype html>
<html dir="rtl">
<head>
<meta charset="utf-8">
<title>ورود</title>
</head>
<body>
<h3>ورود</h3>
<form action="<?php echo basename(__FILE__); ?>" method="post" name="loginform" id="loginform">
  <p>
    <label for="username">نام کاربری:</label>
    <input name="username" type="text" required id="username">
  </p>
  <p>
    <label for="password">رمز عبور:</label>
    <input name="password" type="password" required id="password">
  </p>
  <p>
    <input type="checkbox" name="rememberme" id="rememberme">
    <label for="rememberme">مرا بخاطر بسپار</label>
    <input name="form_name" type="hidden" id="form_name" value="loginform">
  </p>
  <p>
    <input type="submit" name="login" id="login" value="ورود">
  </p>
</form>
<p>برنامه نویسی شده توسط سیاوش بامشادنیا</p>
</body>
</html>