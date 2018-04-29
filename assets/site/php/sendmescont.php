<?php
	$sendto   = "evgenkarp01@ya.ru";
		$name = strip_tags($_POST['nameFooter']);
		$name = htmlspecialchars($name);
		$name = trim($name);
	if ($name == ""){
		$name .= "Не было указано имя, поэтому указываю внешний IP: ";
		$name .=  $_SERVER['REMOTE_ADDR'];
	}
		$tel = strip_tags($_POST['phoneFooter']);
		$tel = htmlspecialchars($tel);
		$tel = trim($tel);

        $email = strip_tags($_POST['emailFooter']);
		$email = htmlspecialchars($email);
		$email = trim($email);

        $site = strip_tags($_POST['siteFooter']);
		$site = htmlspecialchars($site);
		$site = trim($site);

		$usermail = "noreply@quo-group.ru";

		$content  = nl2br($_POST['messageFooter']);
		$content = strip_tags($content);
		$content = htmlspecialchars($content);
		$content = trim($content);
		
	$subject  = "Новое сообщение - с сайта QUO-GROUP.RU - ПИСЬМО->ФОРМА КОНТАКТЫ";
	$headers  = "From: " . strip_tags($usermail) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
	$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
	$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Новое сообщение - ПИСЬМО->КОНТАКТЫ</h2>\r\n";
	$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
	$msg .= "<p><strong>Телефон:</strong> ".$tel."</p>\r\n";
    $msg .= "<p><strong>Emal:</strong> ".$email."</p>\r\n";
    $msg .= "<p><strong>Сайт:</strong> ".$site."</p>\r\n";
	$msg .= "<p><strong>Сообщение:</strong> ".$content."</p>\r\n";
	$msg .= "</body></html>";
	if(@mail($sendto, $subject, $msg, $headers)) {
		echo "<div id='contact_successfully'>Ваше письмо успешно отправлено!</div>";
	} else {
		echo "Ошибка при передаче данных";
	}
?>