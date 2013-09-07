<?php
/*error_reporting(E_ALL);*/
class Controller_CLogin
{

	
	function loginPage()
	{


		include_once("classes/Lib/HandleErrors.php");
		$output['errmsg'] = $Err->messages;
		$output['errval'] = $Err->values;
		$output['styles'] = $Err->style;

		Bin_Template::createTemplate('login.html',$output);

		unset($_SESSION['err']);
		unset($_SESSION['passw']);
	}	

	function loginCheck()
	{

		include('classes/Model/MLogin.php');
		include_once('classes/Lib/ValidateInputs.php');
		
		new Lib_ValidateInputs('logincheck');
		Model_MLogin::loginCheck();


	}
	function logOut()
	{
		session_destroy();
		session_unset();
		Bin_Template::createTemplate('login.html',$output);
	}
	
	function changePassword()
	{
		include("classes/Lib/HandleErrors.php");
		include('classes/Model/MLogin.php');
		include('classes/Display/DLogin.php');
		$output['errmsg']=$Err->messages;
		$output['errval']=$Err->values;
		Bin_Template::createTemplate('changepassword.html',$output);
		unset($_SESSION['pass']);
	}
	
	function updatePassword()
	{
	include_once('classes/Lib/ValidateInputs.php');
	include('classes/Model/MLogin.php');
	include('classes/Display/DLogin.php');
	new Lib_ValidateInputs('changepassword');
	$objUser = new Model_MLogin();
	$objUser->updatePassword();
	}	
	
	
	function forgotPassword()
	{
// 		Bykumar
		include_once('classes/Lib/HandleErrors.php');
		include_once('classes/Model/MLogin.php');
		$output["errmsg"] = $Err->messages; /*print_r($output["errmsg"]); exit;*/
		$output["errval"] = $Err->values;
		$output["style"] = $Err->style;
		Bin_Template::CreateTemplate('forgetpassword.html',$output);
		unset($_SESSION['success']);
	}
	
	
	function validForgetPassword()
	{
// 		Bykumar 
		include('classes/Lib/ValidateInputs.php');
		include_once('classes/Model/MLogin.php');
		new Lib_ValidateInputs('checkemail');
		$obj = new Model_MLogin();
		$obj->sendForgetPassword();
		header('Location:?do=forgotpassword');
	}
	
	function notAllow()
	{
		Bin_Template::CreateTemplate('notallow.html');
	}
}



?>