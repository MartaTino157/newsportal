<?php
class controllerAdmin {
	public static function formLoginSite(){
		include_once('viewAdmin/formLogin.php');
	}
	//admin form
	public static function lodinAction() {
		$logIn=modelAdmin::userAuthentication();
		if(isset($logIn) and $logIn==true) {
			include_once('viewAdmin/startAdmin.php');
		}
		else {
			$_SESSION['errorString']='Неправильное имя пользователя или пароль';
			include_once
		}
	}
}