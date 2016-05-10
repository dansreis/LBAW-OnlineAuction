<?php
    include_once("../config/init.php");
    include_once("../database/user.php");
    include_once("../utils/utils.php");
    
    $params = [ 'first_name', 'last_name', 'birthdate', 'gender', 'email', 'password', 'password_confirmation', 'country'];
	foreach ($params as $param) {
		if (isset($_POST[$param])) {
			$params[$param] = $_POST[$param];
			continue;
		}
	}
    
    if ($params['password'] != $params['password_confirmation']) {
        $_SESSION['error_messages'][] = 'Passwords don\'t match';
        printResponse("error on js", "register");
        return false;
    }
    
    if (register($params['first_name'] . " " . $params['last_name'], $params['birthdate'], $params['gender'], $params['email'], $params['password'], $params['country'])) {
        $_SESSION['success_messages'][] = 'Register successful';
        printResponse("success", "register");
        return true;
    }
    else {
        $_SESSION['error_messages'][] = 'That user already exists';
        printResponse("user_exists", "register");
        return false;
    } 
?>