<?php

    //hash the password
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);

	$db = new SQlite3('../data.db');
	
    $sql = 'INSERT INTO user(username, password, email) VALUES(:username, :password, :email)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':username', $_POST['username']);
    $stmt->bindValue(':password', $password);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->execute();

    $db->close();

    echo "<script>alert('You have successfully registered')</script>";

	header('Location: login.html');

?>
