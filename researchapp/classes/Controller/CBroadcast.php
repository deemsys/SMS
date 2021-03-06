<?php
/*error_reporting(E_ALL);*/
class Controller_CBroadcast
{
	function Controller_CBroadcast()
	{
		if(!isset($_SESSION['admin']['id']) && !isset($_SESSION['admin']['id']))
		header("Location:?do=login");
	}

	function CreateBroadcost()
	{
		if($_SESSION['prive'][3]=='')
		{
			header('Location:?do=dashboard'); exit;
		}
		include('classes/Lib/HandleErrors.php');
		include('classes/Model/MBroadcast.php');
		include('classes/Display/DBroadcast.php');
			if(count($Err->messages) > 0 )
			{
				$output['errval'] = $Err->values; 
				$output['errmsg'] = $Err->messages;
			}
		$output['cr_id']=Model_MBroadcast::CreateId();
		$output['stream']=Model_MBroadcast::streamName($output['errval']);
		$output['group']=Model_MBroadcast::groupName($output['errval']);
		Bin_Template::CreateTemplate('send_stream.html',$output);
		unset($_SESSION['broadcast']);
	}

	function UpdatBroadCast()
	{
		include('classes/Model/MBroadcast.php');
		include('classes/Lib/ValidateInputs.php');
		new Lib_ValidateInputs('updatbroadcast');
		$output['cr_id']=Model_MBroadcast::UpdatBroadCast();
	}

	function viewReports()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include('classes/Model/MBroadcast.php');
		include('classes/Display/DBroadcast.php');
		$output['show_adminuser']=Model_MBroadcast::viewReports();
		Bin_Template::createTemplate('view_reports.html',$output);
		unset($_SESSION['adduser_new']);
		unset($_SESSION['deletepart']);
		unset($_SESSION['upuser_new']);
	}

	function viewAjaxReports()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include('classes/Model/MBroadcast.php');
		include('classes/Display/DBroadcast.php');
		$output['show_adminuser']=Model_MBroadcast::viewReports();
		Bin_Template::createTemplate('ajaxuser.html',$output);	
	}
}
?>