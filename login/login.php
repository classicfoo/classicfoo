<?php

    $db = new SQlite3('../data.db');
    $username = $_POST["username"];

    //check if user is in database
    $dbusername = $db->querysingle("SELECT username FROM user where username='".$username."'");
    if(!$dbusername) {
        echo "Sorry, no users named '". $username. "' please register if you haven't already.";
        die();
    }

    $dbpassword = $db->querysingle("SELECT password FROM user where username='".$username."'");
    //check if password is correct
    if(password_verify($_POST['password'], $dbpassword)) {
        echo "User verified, loggin in...";
    } else {
        echo "Sorry, password is incorrect.";
        die();
    }

   
    session_start();

    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    $_SESSION['start'] = time(); // Taking now logged in time.
    $_SESSION['expire'] = $_SESSION['start'] + (1); // Ending a session in 4hrs from the starting time.

    header('Location: ../index.php');

?>
