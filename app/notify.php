<?php
require_once '../config.php';

try {
	$db = new PDO("mysql:host=" . DB_HOST. ";dbname=" . DB_DATABASE, DB_USER, DB_PASSWORD);

	$sql = "INSERT INTO signups (email) VALUES (:email)";
	$q = $db->prepare($sql);
	$q->execute(array(
		':email' => $_POST['email']
    ));

} catch(PDOException $e) {
    //echo $e->getMessage();
}

