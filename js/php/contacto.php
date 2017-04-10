	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Asesoría Web | Contacto</title>
</head>

<body>

<?php
$email = $_POST['email'];
$message = $_POST['message'];

$mail_to = 'info@multiplode6.com';
$subject = 'Why Contact '.$email;

$body_message .= 'Message: '.$message;

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for submitting your information. We will be able to contact you shortly.');
		window.location = '../wBomb.html';
	</script>
<?php
}

else { ?>
	<script language="javascript" type="text/javascript">
		alert('Email sending failed. Please, write us at info@multiplode6.com');
		window.location = '../wBomb.html';
	</script>
<?php
}

?>




</body>
</html>