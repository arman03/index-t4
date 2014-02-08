<?php
/**
 * @In the name of God!
 * @author: Siavash Bamshadnia (amtr)
 * @email: sbamtr@gmail.com
 */
?>
<?php
include('engine/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" slick-uniqueid="3">
<head>
<meta name="author" content="Siavash Bamshadnia (amtr)">
<meta name="keywords" lang="fa" content="<?php echo $keywords ?>" />
<meta name="description" content="<?php echo $description ?>">
<title><?php echo $title ?></title>
<link rel="stylesheet" type="text/css" href="gpack/main_default/lang/ir/compact.css">
<meta name="content-language" content="ir">
<meta http-equiv="imagetoolbar" content="no">
<script type="text/javascript" src="crypt.js?<?php echo time().'';?>"></script>
<?php echo $header ?>
</head>
<body class="gecko">
<div id="backgroundLeft"></div>
<div id="backgroundRight"></div>
<div id="background_frame">
  <div id="navigation-wrapper">
    <div id="navigation-container">
      <div id="country_select"> </div>
    </div>
  </div>
  <div id="content-container">
    <div id="content-main">
      <div id="wit">
        <div id="gold-top"> </div>
        <div id="gold">
          <div id="frame-content">
            <?php
			echo $offline_message;
			?>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="overlaybg"></div>
</div>
</body>
</html>