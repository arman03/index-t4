<h1 id="header">ایمیل تایید - اسپید 1000</h1>
<div class="error" id="showErrorsDiv"></div>
<div id="thanksForYourRegistration">
  <div class="greenbox greenBackground registrationSuccessful success">
    <div class="greenbox-top"></div>
    <div class="greenbox-content"> از ثبت نام شما متشکریم. اطلاعات اکانت و کد فعال سازی به شما ارسال خواهد شد. </div>
    <div class="greenbox-bottom"></div>
    <div class="clear"></div>
  </div>
</div>
<div id="activationFormContainer">
  <form id="activation" name="activation">
    <input type="hidden" value="98" name="worldId">
    <span id="activationNeeded"> برای بازی در اسپید 1000 باید اکانت خود را فعال کرده باشید. </span>
    <table cellspacing="0" cellpadding="0">
      <tbody>
        <tr>
          <th></th>
          <td class="spacer">&nbsp;</td>
          <td class="worldNotFound"><div class="error"></div></td>
        </tr>
        <tr>
          <th> کد فعال سازی: </th>
          <td class="spacer">&nbsp;</td>
          <td class="activationCode"><input type="text" name="activationCode" class="text" id="activationCode">
            <br>
            <div class="error"> </div></td>
        </tr>
        <tr>
          <th class="submit"></th>
          <td class="spacer">&nbsp;</td>
          <td class="submit"><button class="button" value="اکانت خود را فعال کرده و بازی کنید" type="submit">
            <div class="button-container">
              <div class="button-position">
                <div class="btl">
                  <div class="btr">
                    <div class="btc"></div>
                  </div>
                </div>
                <div class="bml">
                  <div class="bmr">
                    <div class="bmc"></div>
                  </div>
                </div>
                <div class="bbl">
                  <div class="bbr">
                    <div class="bbc"></div>
                  </div>
                </div>
              </div>
              <div class="button-contents"> اکانت خود را فعال کرده و بازی کنید </div>
            </div>
            </button>
            <div class="clear"></div></td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
<div class="greenbox ">
  <div class="greenbox-top"></div>
  <div class="greenbox-content">
    <div onclick="Travian.Main.switchButtonToggle(
		[
			{'element':$$('#chooseOtherServerLink .roundArrow'), 'className':'closed'},
			{'element':$$('#chooseOtherServerLink .roundArrow'), 'className':'opened'},
			{'element':$$('#chooseOtherServerForm'), 'className':'hide'}
		]
	);" class="switchButton chooseOtherServerLink" id="chooseOtherServerLink"> <img src="img/x.gif" class="roundArrow closed" id="noEmailReceivedImage"> انتخاب سرور دیگر؟</div>
    <div class="hide" id="chooseOtherServerForm"> اینجا می&zwnj;توانید سرور دیگری برای فعال سازی انتخاب کنید
      <div id="chooseOtherServerContainer">
        <div class="serverList">
          <div class="subContent currentServer " id="otherServers">
            <div class="server serverSmall serverNormal worldIconNormal 
				activeWorldForActivation" id="activationServer98">
              <div class="name" onclick="return Travian.Main.changeServerForActivation('98', '6Le1adcSAAAAAHF7QGEiqbC_DV-sy5vkSlprTL0L', 'ir');">اسپید 1000</div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="greenbox-bottom"></div>
  <div class="clear"></div>
</div>
<div class="greenbox noEmailReceived">
  <div class="greenbox-top"></div>
  <div class="greenbox-content">
    <div onclick="Travian.Main.switchButtonToggle(
		[
			{'element':$$('#noEmailReceivedLink .roundArrow'), 'className':'closed'},
			{'element':$$('#noEmailReceivedLink .roundArrow'), 'className':'opened'},
			{'element':$$('#noMailReceivedForm'), 'className':'hide'}
		]
	);
		Recaptcha.create('6Le1adcSAAAAAHF7QGEiqbC_DV-sy5vkSlprTL0L', 'recaptcha_widget',
	{
		theme:					'custom',
		custom_theme_widget:	'recaptcha_widget',
		lang:					'ir',
		callback:				function()
		{
		}
	});
		" class="switchButton noEmailReceivedLink" id="noEmailReceivedLink"> <img src="img/x.gif" class="roundArrow closed" id="noEmailReceivedImage"> ایمیلی دریافت نکرده&zwnj;اید؟</div>
    <div class="hide" id="noMailReceivedForm">
      <div class="successMessage success hide" id="activationMailResend"> ایمیل برای شما ارسال شد. </div>
      <form id="resendActivationEmail" name="resendActivationEmail">
        <input type="hidden" value="98" name="worldId">
        امکان دارد دلیل آن یکی از موارد زیر باشد:
        <ul>
          <li>آدرس ایمیل را اشتباه نوشته&zwnj;اید</li>
          <li>ظرفیت ادرس ایمیل شما پر شده است</li>
          <li>دومین را اشتباه وارد کرده&zwnj;اید: برای مثال aol.ir موجود نمی&zwnj;باشد و فقط aol.com می&zwnj;تواند باشد.</li>
          <li>ایمیل به اشتباه به پوشه&zwnj;ی اسپم/جانک/بالک شما انتقال یافته است.</li>
        </ul>
        <div class="error" id="showErrorsDivResendMail"> </div>
        <div class="sendAgain" id="sendAgain"> از اینجا می&zwnj;توانید برای ارسال دوباره&zwnj;ی کد فعال سازی استفاده کنید </div>
        <table cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <th> آدرس ایمیل فعلی </th>
              <td class="spacer">&nbsp;</td>
              <td class="email"><input type="text" value="" name="email" class="text" id="email">
                <br>
                <div class="error"></div></td>
            </tr>
            <tr class="
							hide
						" id="captchaTableRow">
              <th> کد امنیتی </th>
              <td class="spacer">&nbsp;</td>
              <td class="captcha"><div style="display: none" id="recaptcha_widget">
                  <div id="recaptcha_image"></div>
                  <a onclick="Recaptcha.reload()" class="captchaOptions">درخواست کد امنیتی جدید.</a>
                  <input type="text" class="text" name="recaptcha_response_field" id="recaptcha_response_field">
                </div>
                <div class="error"></div></td>
            </tr>
            <tr>
              <th class="submit"></th>
              <td class="spacer">&nbsp;</td>
              <td class="submit"><button class="button" value="ارسال ایمیل" type="submit">
                <div class="button-container">
                  <div class="button-position">
                    <div class="btl">
                      <div class="btr">
                        <div class="btc"></div>
                      </div>
                    </div>
                    <div class="bml">
                      <div class="bmr">
                        <div class="bmc"></div>
                      </div>
                    </div>
                    <div class="bbl">
                      <div class="bbr">
                        <div class="bbc"></div>
                      </div>
                    </div>
                  </div>
                  <div class="button-contents"> ارسال ایمیل </div>
                </div>
                </button></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <div class="greenbox-bottom"></div>
  <div class="clear"></div>
</div>
<div class="greenbox changeEmailAdress">
  <div class="greenbox-top"></div>
  <div class="greenbox-content">
    <div onclick="Travian.Main.switchButtonToggle(
		[
			{'element':$$('#changeEmailLink .roundArrow'), 'className':'closed'},
			{'element':$$('#changeEmailLink .roundArrow'), 'className':'opened'},
			{'element':$('changeEmailForm'), 'className':'hide'}
		]
	);
		" class="switchButton noEmailReceivedLink" id="changeEmailLink"> <img src="img/x.gif" class="roundArrow closed" id="noEmailReceivedImage"> تغییر آدرس ایمیل؟</div>
    <div class="hide" id="changeEmailForm">
      <div class="successMessage success hide" id="mailChangedAndActivationMailResend"> آدرس ایمیل شما عوض شد. ایمیل فعال سازی به آدرس ایمیل جدید شما ارسال شد. </div>
      <div class="error" id="showErrorsDivChangeMail"> </div>
      <form id="changeEmail" name="changeEmail">
        اگر در هنگام ثبت نام از آدرس ایمیل اشتباهی استفاده کرده&zwnj;اید، می&zwnj;توانید آنرا اینجا عوض کنید.
        <input type="hidden" value="98" name="worldId">
        <table cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <th> <label for="oldEmail">نام اکانت و یا آدرس ایمیل:</label>
              </th>
              <td class="spacer">&nbsp;</td>
              <td class="oldEmailOrUsername"><input type="text" value="" name="oldEmail" class="text" id="oldEmailOrUsername">
                <br>
                <div class="error"></div></td>
            </tr>
            <tr>
              <th> <label for="newEmail">آدرس ایمیل جدید:</label>
              </th>
              <td class="spacer">&nbsp;</td>
              <td class="newEmail"><input type="text" name="newEmail" class="text" id="newEmail">
                <br>
                <div class="error"></div></td>
            </tr>
            <tr>
              <th> <label for="password">رمز عبور:</label>
              </th>
              <td class="spacer">&nbsp;</td>
              <td class="password"><input type="password" name="password" class="text" id="password">
                <br>
                <div class="error"></div></td>
            </tr>
            <tr>
              <th class="submit"></th>
              <td class="spacer">&nbsp;</td>
              <td class="submit"><button class="button" value="تغییر آدرس ایمیل" type="submit">
                <div class="button-container">
                  <div class="button-position">
                    <div class="btl">
                      <div class="btr">
                        <div class="btc"></div>
                      </div>
                    </div>
                    <div class="bml">
                      <div class="bmr">
                        <div class="bmc"></div>
                      </div>
                    </div>
                    <div class="bbl">
                      <div class="bbr">
                        <div class="bbc"></div>
                      </div>
                    </div>
                  </div>
                  <div class="button-contents"> تغییر آدرس ایمیل </div>
                </div>
                </button></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <div class="greenbox-bottom"></div>
  <div class="clear"></div>
</div>