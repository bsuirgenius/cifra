<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://cifra.by/',
	'homepage_url' => 'http://cifra.by/index.html',
	'icon' => '',
	'version' => '13.0.2.19',
	'sitename' => '1',
	'public_folder' => '',
	'salt' => 'afyf4mi625824dzc282y9v70v85fwy15g',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


$imSettings['admin'] = array(
	'notification_public_key' => '407ab4adecf854ab',
	'notification_private_key' => 'b35394e6fb55c142',
	'enable_manager_notifications' => false,
	'theme' => 'orange'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array(
	'x5gb51' => array(
		'id' => 'x5gb51',
		'pagetitle' => 'Отзывы',
		'celltitle' => '',
		'rating' => TRUE,
		'order' => 'desc', 
		'sendmode' => 'file',
		'folder' => '',
	)
);
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v13 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Это письмо-подтверждение предназначено для исключения несанкционированного использования вашего адреса электронной почты.<br>Если вы получили это сообщение по ошибке, пожалуйста, сообщите об этом отправителю и удалите это письмо, не делая копий.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#708090';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Проверочное слово:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php