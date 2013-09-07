<?php
/*error_reporting(E_ALL);*/
class Controller_CMydashboard
{
	function Controller_CMydashboard()
	{
		if(!isset($_SESSION['admin']['id']) && !isset($_SESSION['admin']['id']))
		header("Location:?do=login");
	}
	function Mydashboard()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include('classes/Model/MMydashboard.php');
		include('classes/Display/DMydashboard.php');
		if(count($Err->messages) > 0 )
		{
			$output['errval'] = $Err->values; 
			$output['errmsg'] = $Err->messages;
		}
		$output['show_adminuser']=Model_MMydashboard::viewParticipants();
		Bin_Template::CreateTemplate('dashboard.html',$output);
	}
}
?>