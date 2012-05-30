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
	
	if (mb_strlen($username) > 25) {
		$errors['username'] = true;
	}
	
	if (!array_key_exists($subject, $possible_subjects)) {
		$errors['subject'] = true;
	}
	
	if (!isset($_POST['terms'])) {
		$errors['terms'] = true;
	}
	
	if (!isset($_POST['lang'])) {
		$errors['lang'] = true;
	}
	
	if (empty($errors)) {
		$headers = 'From: ' . $name .  '<' . 'adognamedmoe@gmail.com' . '>'; //this from can be made up ie 'noreply@web.com'
		mail( $email , 'Welcome, you are now registered', $possible_subjects[$subject], $notes, $headers);
	}
}