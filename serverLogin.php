<?php
include("engine/config.php");
?>

<h1>لطفاً یک جهان بازی (سرور) انتخاب کنید.</h1>
<div class="greenbox serverListBox">
  <div class="greenbox-top"></div>
  <div class="greenbox-content">
    <div class="serverList">
      <div class="subContent" id="otherServers">
        <div class="serverList currentServer">
          <?php 
		for ($i = 1; $i <= 10; $i++) {
		include ('engine/includes/number.php');
		$enable = "$number"."_enable";$enable = $$enable;
		if($enable){
		$name = "$number"."_name";$name = $$name;
		$link = "$number"."_link";$link = $$link;
		$speed = "$number"."_speed";$speed = $$speed;
		$reward = "$number"."_reward";$reward = $$reward;
		$version = "$number"."_version";$version = $$version;
		?>
          <div class="server serverOdd serverBig serverNormal serverBigNew">
            <div class="name"><?php echo $name ?></div>
            <div class="player"><?php echo ($reward ? 'این سرور دارای جایزه است' : 'این سرور جایزه ندارد') ?></div>
            <div class="mark">ورژن : <?php echo $version ?></div>
            <div class="start">این سرور دارای سرعت <?php echo $speed ?> برابر است.</div>
            <a class="link" title="ورود <?php echo $name ?>" href="<?php echo $link ?>" target="_blank"></a> </div>
          <div class="clear">&nbsp;</div>
          <?php
		}}
		?>
        </div>
      </div>
    </div>
  </div>
  <div class="greenbox-bottom"></div>
  <div class="clear"></div>
</div>