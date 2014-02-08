<?php
include("engine/config.php");
?>

<h1>ثبت نام</h1>
<div class="greenbox serverListBox" id="maindiv">
  <div class="greenbox-top"></div>
  <div class="greenbox-content">
  <form name="registration" id="registration" action="ServerRegistering.php" method='POST'>
    <div id="registrationForm" class="registrationForm">
      <div class="serverList">
        <div class="subContent" id="otherServers">
          <div class="serverList currentServer">
            <h3 class="chooseAServer">لطفاً یک جهان بازی (سرور) انتخاب کنید.</h3>
            <?php 
			for ($i = 1; $i <= 10; $i++) {
			include ('engine/includes/number.php');
			$enable = "$number"."_enable";$enable = $$enable;
			if($enable){
			$name = "$number"."_name";$name = $$name;
			$speed = "$number"."_speed";$speed = $$speed;
			$reward = "$number"."_reward";$reward = $$reward;
			$version = "$number"."_version";$version = $$version;
			echo '<div class="server serverOdd serverBig serverNormal serverBigNew" onclick="return changeClass(\''.$speed.'x\')">';
			?>
            <div class="name"><?php echo $name ?></div>
            <div class="player"><?php echo ($reward ? 'این سرور دارای جایزه است' : 'این سرور جایزه ندارد') ?></div>
            <div class="mark">ورژن : <?php echo $version ?></div>
            <div class="start">این سرور دارای سرعت <?php echo $speed ?> برابر است.</div>
            <a class="link" title="ثبت نام در <?php echo $name ?>"></a> </div>
          <div class="clear">&nbsp;</div>
          <?php
			}}
			?>
          <div class="switchButton hide" id="otherServerSwitch"></div>
        </div>
      </div>
    </div>
    <div class="subContent hide" id="registerForm">
      <div class="error" id="showErrorsDiv">&nbsp;</div>
      <div style="margin-right:220px;text-align:center;color:red;font-weight:bold;">
        <h1>ثبت نام در سرور<span id="namelol"></span></h1>
      </div>
      <table class="transparent" id="registerFormTable">
        <tbody>
          <tr>
            <th class="playerName"><label for="playerName">نام اکانت:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="playerName"><input id="playerName" class="text" name="playerName" onfocus="Travian.Main.Registration.showInfoString('حداقل 3 حرف', 'playerNameInfo')" onblur="Travian.Main.Registration.hideInfoString('playerNameInfo')" type="text">
              <br>
              <div class="error" id="playerNameInfo"></div></td>
          </tr>
          <tr>
            <th class="password"><label for="registerPassword">رمز عبور:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="password"><input id="registerPassword" class="text" name="password" onfocus="Travian.Main.Registration.showInfoString('حداقل 4 حرف و باید متفاوت با نام اکانت باشد.', 'passwordInfo')" onblur="Travian.Main.Registration.hideInfoString('passwordInfo')" type="password">
              <br>
              <div class="error" id="passwordInfo"></div></td>
          </tr>
          <tr>
            <th class="email"><label for="email">آدرس ایمیل:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="email"><input id="email" class="text" name="email" onfocus="Travian.Main.Registration.showInfoString('برای فعال سازی به آدرس ایمیل نیاز است.', 'emailInfo')" onblur="Travian.Main.Registration.hideInfoString('emailInfo')" type="text">
              <br>
              <input name="server" id="server" type="hidden" value=''/>
              <div class="error" id="emailInfo"></div></td>
          </tr>
          <tr>
            <th class="email"><label for="email">نژاد:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="email"><table style="margin-right:0;">
                <tr>
                  <td align="center"><input type='radio' id='1' name='tribe' value='1'/>
                    <label for='1'>رومیها</label></td>
                  <td align="center"><input type='radio' id='2' name='tribe' value='2'/>
                    <label for='2'>توتنها</label></td>
                  <td align="center"><input type='radio' id='3' name='tribe' value='3'/>
                    <label for='3'>گولها</label></td>
                </tr>
                <tr>
                  <td><label for="1"><img src="img/x.gif" class="tribeImage romans" alt="رومیها"></label></td>
                  <td><label for="2"><img src="img/x.gif" class="tribeImage teutons" alt="توتنها"></label></td>
                  <td><label for="3"><img src="img/x.gif" class="tribeImage gauls" alt="گولها"></label></td>
                </tr>
              </table>
              <div class="error" id="emailInfo"></div></td>
          </tr>
          <tr>
            <th class="email"><label for="bid">منطقه:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="email"><table style="margin-right:0;">
                <tr>
                  <td align="center"><input type='radio' id='4a' name='position' value='4'/>
                    <label for='4a'>شمال غربی</label></td>
                  <td align="center"><input type='radio' id='3a' name='position' value='3'/>
                    <label for='3a'>شمال شرقی</label></td>
                </tr>
                <tr>
                  <td align="center"><input type='radio' id='2a' name='position' value='2'/>
                    <label for='2a'>جنوب غربی</label></td>
                  <td align="center"><input type='radio' id='1a' name='position' value='1'/>
                    <label for='1a'>جنوب شرقی</label></td>
                </tr>
              </table></td>
          </tr>
          <tr id="preRegistrationCode" class="hide">
            <th class="preRegistrationCode"><label for="preRegistrationCode">کد:</label></th>
            <td class="spacer">&nbsp;</td>
            <td class="preRegistrationCode"><input id="preRegistrationCode" class="text" name="preRegistrationCode" onfocus="Travian.Main.Registration.showInfoString('شما در این سرور تنها میتوانید با داشتن کد بازی کنید.', 'preRegistrationCodeInfo')" onblur="Travian.Main.Registration.hideInfoString('preRegistrationCodeInfo')" type="text">
              <br>
              <div class="info"></div>
              <div class="error" id="preRegistrationCodeInfo"></div></td>
          </tr>
          <tr>
            <th class="generalTermsAndConditions"></th>
            <td class="spacer">&nbsp;</td>
            <td class="generalTermsAndConditions"><div class="checkboxfield">
                <input id="generalTermsAndConditions" class="check" name="generalTermsAndConditions" value="1" type="checkbox">
                <label for="generalTermsAndConditions">من <a href="#spielregeln" target="_blank">قوانین 
                  بازی</a> و <a href="./#agb" target="_blank">ضوابط و شرایط 
                  عمومی</a> را قبول می‌کنم.</label>
                <div class="clear">&nbsp;</div>
              </div>
              <div class="error"></div></td>
          </tr>
          <tr>
            <th class="newsletter"></th>
            <td class="spacer">&nbsp;</td>
            <td class="newsletter"><div class="checkboxfield">
                <input id="newsletter" class="check" name="newsletter" value="1" type="checkbox">
                <label for="newsletter">قبول می‌کنم که شرکت بازی‌های تراوین اجازه دارد خبرهای جالب در مورد بازی را به من ارسال کند.</label>
                <div class="clear">&nbsp;</div>
              </div></td>
          </tr>
          <tr>
            <th class="submit"></th>
            <td class="spacer">&nbsp;</td>
            <td class="submit"><br>
              <button class="fixedSizeBigButton" type="submit">
              <div class="bigButtonText play white bold">ثبت نام</div>
              </button></td>
          </tr>
        </tbody>
      </table>
      <a class="alreadyRegistered" href="index.php#activation">در حال حاضر ثبت نام کرده‌اید؟ اکانت خود را فعال کنید. <span class="clear">&nbsp;</span> </a> </div>
    </div>
  </form>
</div>
<div class="greenbox-bottom"></div>
<div class="clear"></div>
</div>