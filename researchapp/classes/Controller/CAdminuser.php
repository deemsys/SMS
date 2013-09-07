<?php
// error_reporting(E_ALL);
class Controller_CAdminuser
{
	function Controller_CAdminuser()
	{
		if(!isset($_SESSION['admin']['id']) && !isset($_SESSION['admin']['id']))
		header("Location:?do=login");
	}
	
	function addAdminuser()
	{
					
		if($_SESSION['prive'][7]=='')
		{
			header('Location:?do=notallow'); exit;
		}
		include('classes/Model/MAdminuser.php');
		include('classes/Lib/HandleErrors.php');
		if(count($Err->messages) > 0 )
		{
			$output['errval'] = $Err->values; 
			$output['errmsg'] = $Err->messages;
/*print_r($output['errmsg']); */
		}
		Bin_Template::CreateTemplate('addadminuser.html',$output);
	}
	
	function insertAdminuser()
	{
		include('classes/Model/MAdminuser.php');
		include('classes/Lib/ValidateInputs.php');
		new Lib_ValidateInputs('addAdminuser');
		Model_MAdminuser::insertAdminuser();
	}
	
	function viewAdminuser()
	{
// 		print_r($_SESSION['prive'][0]); exit;
		include_once('classes/Lib/CommonAjaxPaging.php');
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		$output['show_adminuser']=Model_MAdminuser::viewAdminuser();
		Bin_Template::createTemplate('view_adminuser.html',$output);
		unset($_SESSION['adduser']);
		unset($_SESSION['delete']);
		unset($_SESSION['update']);
		unset($_SESSION['active']);
		unset($_SESSION['suspend']);
//		echo "By Kumar" exit;
	}
	
	function ajaxadminuser()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		$output['show_adminuser']=Model_MAdminuser::viewAdminuser();
		Bin_Template::createTemplate('ajaxuser.html',$output);	
//		echo "By Kumar" exit;
	}
	
	function userDetail()
	{
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		$output['view_adminuser']=Model_MAdminuser::userDetail();
		Bin_Template::CreateTemplate('userdetail.html',$output);
	}
	
	function editUser()
	{
		if($_SESSION['prive'][8]=='')
		{
			$_SESSION['pir']= "Your Not Allow To Edit Admin User"; 
			header('Location:?do=notallow');exit;
		}
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		include('classes/Lib/HandleErrors.php');
		if(count($Err->messages) > 0 )
		{
			$output['errval'] = $Err->values; 
			$output['errmsg'] = $Err->messages;
// print_r($output['errmsg']); 
		}
		$output['edit_adminuser']=Model_MAdminuser::editUser($Err->messages);
		Bin_Template::CreateTemplate('edituser.html',$output);
	}
	
	function deleteUser()
	{
		if($_SESSION['prive'][9]=='')
		{
			$_SESSION['pir']= "Your Not Allow To Delete Admin User"; 
			header('Location:?do=notallow');exit;
		}
		include_once('classes/Model/MAdminuser.php');
		Model_MAdminuser::deleteUser();
//		echo "By Kumar" exit;
	}
	
	function activeUser()
	{
		include_once('classes/Model/MAdminuser.php');
		Model_MAdminuser::activeUser();
//		echo "By Kumar" exit;
	}
	
	function updateAdminuser()
	{
		
		include('classes/Model/MAdminuser.php');
		include('classes/Lib/ValidateInputs.php');
		new Lib_ValidateInputs('updateAdminuser');
		Model_MAdminuser::updateAdminuser();
		$objaddadminuser = new Model_MAdminuser();
		$objaddabminuser->updateAdminuser();
		$previ=explode(",",$rec[0]['previlages']);
	}
	
	function activityOfAdmin()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		$output['ad_name']=ucfirst($_SESSION['admin']['username']);
		$output['show_adminuser']=Model_MAdminuser::activityOfAdmin();
		Bin_Template::createTemplate('adminactivity.html',$output);
	}
	
	function ajaxactivityofadmin()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include_once('classes/Model/MAdminuser.php');
		include_once('classes/Display/DAdminuser.php');
		$output['show_adminuser']=Model_MAdminuser::activityOfAdmin();
		Bin_Template::createTemplate('ajaxuser.html',$output);
//		echo "By Kumar" exit;
	}
}
?>