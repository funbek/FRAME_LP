<?php
$sendto   = "web_tec@mail.ru";
$usermail = $_POST['email'];
$content  = nl2br($_POST['text']);
$phone  = nl2br($_POST['tel']);
// Формирование заголовка письма
$subject  = "Новое сообщение";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;font-size: 16px; border-bottom:1px dotted #ccc;'>Сообщение с Landing page 'Лечение заболеваний дисбактериоза кишечника за 7 дней'</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$content."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>