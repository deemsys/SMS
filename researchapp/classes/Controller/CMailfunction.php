<?php
class Controller_CMailfunction
{
	function Controller_CMailfunction()
	{
		if(!isset($_SESSION['admin']) && !isset($_SESSION['admin']))
		header("Location:?do=login");
	}
	
	function addMailtemplate()
	{
		if($_SESSION['prive'][10]=='')
		{
			header('Location:?do=dashboard'); exit;
		}
		include('classes/Model/MMailfunction.php');
		include('classes/Lib/HandleErrors.php');
		if(count($Err->messages) > 0)
		{
			$output['err'] = $Err->messages;
			$output['val'] = $Err->values;
		}	
		$output['editstream'] = Model_MMailfunction::selectmailtemp();
/*		print_r($output['editstream'] ); exit;*/
		Bin_Template::CreateTemplate('addmailtemp.html',$output);
		unset($_SESSION['mail']);
	}

	function insertMailtemplate()
	{	
		if($_SESSION['prive'][10]=='')
		{
			header('Location:?do=dashboard'); exit;
		}
		include('classes/Model/MMailfunction.php');
		include('classes/Lib/ValidateInputs.php');
		new Lib_ValidateInputs('addmailtemp');
		Model_MMailfunction::insertMailtemplate();
		unset($_SESSION['mail']);
	}
	
	function selectMailtemp()
	{
		include_once('classes/Model/MMailfunction.php');
		include_once('classes/Display/DMailfunction.php');
		$output['editstream'] = Model_MMailfunction::selectmailtemp();
	}
	
}
?>