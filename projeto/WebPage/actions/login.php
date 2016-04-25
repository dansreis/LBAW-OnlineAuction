<?php
	/*
	$path = '../config/init.php';

    if(!file_exists($path))
        $path = 'config/init.php';
    if(!file_exists($path))
        $path = '../../config/init.php';
    if(!file_exists($path))
        $path = '../../../config/init.php';     
    try {
        include_once($path);
    }
    catch(PDOException $e) {
		echo $e;
		return -1;
	}
	*/
	$path = '../database/user.php';

    if(!file_exists($path))
        $path = 'database/user.php';
    if(!file_exists($path))
        $path = '../../database/user.php';
	if(!file_exists($path))
		$path = '../../../database/user.php';
    try {
        include_once($path);
    }
    catch(PDOException $e) {
		echo $e;
		return -1;
	}
	
	$params = [ 'functionName','username', 'password' ];
	foreach ($params as $param) {
		if (isset($_POST[$param])) {
			$params[$param] = $_POST[$param];
			continue;
		}
	}

	if (count($_SESSION) > 0) {
		printResponse("already logged", "login");
		return false;
	}
	
	$id = compareLogin($params['username'], $params['password']);
	if ($id == -1) {
		printResponse("wrong_login", "login");
		return false;
	}
	else if ($id > 0){
		$_SESSION['user'] = $id;
		printResponse("success", "login");
		return false;
	}
	else {
		printResponse("WTF", "login");
		return true;
	}
?>