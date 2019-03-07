<?php
//
// A validated PHP contact form
// http://blog.surmodernite.de/2013/12/a-validated-php-contact-form
//
// The MIT License (MIT)
// Copyright (c) 2013 tilman.boerner@gmx.net
// Permission is hereby granted, free of charge, to any person obtaining a copy
// of this software and associated documentation files (the "Software"), to deal
// in the Software without restriction, including without limitation the rights
// to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
// copies of the Software, and to permit persons to whom the Software is
// furnished to do so, subject to the following conditions:
// The above copyright notice and this permission notice shall be included in
// all copies or substantial portions of the Software.
// THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
// IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
// FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
// AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
// LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
// OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
// THE SOFTWARE.
// uses PHPMailer (https://github.com/PHPMailer/PHPMailer), licensed under
// LGPL 2.1 (http://www.gnu.org/licenses/lgpl-2.1.html)
function getItem($array, $key, $default = "") {
  return isset($array[$key]) ? $array[$key] : $default;
}
function okLength($str, $maxlen) {
	$len = strlen($str);
	return ($len > 0) and ($len <= $maxlen);
}
function sanitize_and_validate($data) {
	$name = getItem($data, 'name');
	$email = getItem($data, 'email');
	$message = getItem($data, 'message');
	if (! okLength($name, 100)) {
		return False;
	}
	if (! okLength($email, 100)) {
		return False;
	}
	if (! okLength($message, 2048)) {
		return False;
	}
	$name = trim($name);
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	if (empty($name)) {
		return False;
	}
	$email = trim($email);
	$email = filter_var($email, FILTER_SANITIZE_EMAIL);
	if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return False;
	}
	$message = trim($message);
	$message = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	if (empty($message)) {
		return False;
	}
	$message = $name . " (" . $email . ") writes:\n\n" . $message;
	$cc = (bool) getItem($data, 'cc');
	$seems_robot = (bool) trim(getItem($data, 'subject'));
	$data = array(
		'name' => $name,
		'email' => $email,
		'message' => $message,
		'cc' => $cc,
		'seems_robot' => $seems_robot,
	);
	return $data;
}
function print_form($data) {
	$name = getItem($data, 'name');
	$email = getItem($data, 'email');
	$message = getItem($data, 'message');
	$subject = getItem($data, 'subject');
	$cc_checked = getItem($data, 'cc') ? 'checked="checked"' : '';
	$form = <<<ENDFORM
<form id="form2" action="" method="post">
  <fieldset>
    <legend>Contact form</legend>
    <p class="first">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" size="30" maxlength="50" value="$name" required />
    </p>
    <p>
      <label for="email">Email</label>
      <input type="email" name="email" id="email" size="30"  maxlength="50" value="$email" required />
      <label for="cc">
      	<input type="checkbox" name="cc" id="cc" $cc_checked />
      	Send me a copy
      </label>
    </p>
    <p>
      <label for="message">Message</label>
      <textarea name="message" id="message" cols="30" rows="10" maxlength="1024" required>{$message}</textarea>
    </p>
	<p class="special">
	  <label for="subject">Robot Catcher: Do not write into this field</label>
	  <input type="text" name="subject" id="subject" size="30"  maxlength="50" value="$subject"/>
	  This last field is used to catch robots. If anything is written in here,
	  the message will <strong>not</strong> be sent.
	</p>
    <p class="submit"><button type="submit">Send</button></p>
  </fieldset>
</form>
<script>
	$("#form2").validate();
</script>
ENDFORM;
	echo $form;
}
function send_mail($data) {
	if ($data['seems_robot']) {
		echo <<<ENDERROR
		<div class="error">
		<h3>
			Message not sent.
		</h3><p>
			Because the &quot;Robot Catcher&quot field contains text, it
			looks like a bot filled out the form.
		</p><p>
			If you're not a bot, we apologize! Please go back to the form
			to try again, and make sure the &quot;Robot Catcher&quot field
			is empty.
		</p>
		</div>
ENDERROR;
		return True;
	}
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$DEBUG = 0;
   	$mail->Host='smtp.gmail.com';
    $PORT = 587;
	$USER = 'PwtN3pV5p@gmail.com';
	$PASSWORD = 'ptLm8Bz#@D';
	$RECIPIENT_ADDR = 'PwtN3pV5p@gmail.com';
	$SUBJECT = 'mensagem do site';
	$name = $data['name'];
	$email = $data['email'];
	$message = $data['message'];
	$cc_self = $data['cc'];
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailerAutoload.php';
	//Create a new PHPMailer instance
	$mail = new PHPMailer();
	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	$mail->SMTPDebug = $DEBUG;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';
	//Set the hostname of the mail server	
	// $mail->Host = $HOST;
	// //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	// $mail->Port = $PORT;
	// //Set the encryption system to use - ssl (deprecated) or tls
	// $mail->SMTPSecure = 'tls';
	// //Whether to use SMTP authentication
	// $mail->SMTPAuth = true;
	// //Username to use for SMTP authentication - use full email address for gmail
	// $mail->Username = $USER;
	// //Password to use for SMTP authentication
	// $mail->Password = $PASSWORD;

	$mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='PwtN3pV5p@gmail.com';
    $mail->Password='ptLm8Bz#@D';

	//Set who the message is to be sent from
	// $mail->setFrom($email, $name);
	//Set an alternative reply-to address
	// $mail->addReplyTo('somebody@somewhere.com');
	//Set who the message is to be sent to
	// $mail->setFrom($USER);
	// $mail->addAddress($RECIPIENT_ADDR);
	// $mail->addReplyTo($email, $name);

	$mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('PwtN3pV5p@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);

	if ($cc_self) {
		$mail->addCC($_POST['email']);
	}
	//Set the subject line
	//$mail->Subject = $SUBJECT;
	$mail->Subject='Mensagem do meu Website: '.$_POST['name'];
	$mail->isHTML(true);
	$mail->Body    = nl2br(filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_ENCODE_HIGH));
	//Replace the plain text body with one created manually
	$mail->AltBody = $message;
	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	    return False;
	} else {
	    echo "<p>Message sent.</p><p>Thank you! I will get back to you as soon as possible.</p>";
	    return True;
	}
}
$data = sanitize_and_validate($_POST);
if (!($data and send_mail($data))) {
	print_form($_POST);
}
?>