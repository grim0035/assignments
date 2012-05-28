<?php
$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_NUMBER_INT);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (empty($name)) {
		//empty: 0, false, null, '', array(), '0'
		$errors['name'] = true;	
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	
	if (!array_key_exists($subject, $possible_subjects)) {
		$errors['subject'] = true;
	}
	
	if (mb_strlen($notes) < 5 || mb_strlen($notes) > 100) {
		$errors['notes'] = true;
	}
	
	if (!isset($_POST['terms'])) {
		$errors['terms'] = true;
	}
	
	if (empty($errors)) {
		$headers = 'From: ' . $name . ' <' . $email . '>'; //this from can be made up ie 'noreply@web.com'
		mail('grim0035@algonquinlive.com', 'From contact form', $possible_subjects[$subject], $notes, $headers);
	}
}