<?php 
	include("config.php");


$form = $_POST;
$id = $form['id'];
$firstname = $form['firstname'];
$lastname = $form['lastname'];
$email = $form['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	echo 'Email address is invalid, you can hit the back button and fix it';
}


try {
	$db = new PDO("mysql:host=" . DB_HOST. ";dbname=" .DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$add_supporter = $db->prepare("INSERT INTO supporters (id, firstname, lastname, email) 
												VALUES (:id, :firstname, :lastname, :email)");
	$add_supporter->bindParam(":id", $id);
	$add_supporter->bindParam(":firstname", $firstname);
	$add_supporter->bindParam(":lastname", $lastname);
	$add_supporter->bindParam(":email", $email);
	$add_supporter->execute();



} catch (Exception $e) {
	echo "Error in connection to database" . $e->getMessage() . "</br>";
	die();
}


header('Location: supporters-and-form-pages/supporters.php');



























?>
