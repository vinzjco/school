<?php
	require_once('session.php');
	require_once('users-model.php');
	$user_logout = new users();
	
	if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('home.php');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->logout();
		$user_logout->redirect('index.php');
	}
