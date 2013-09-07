<?php
/*error_reporting(E_ALL);*/
class Controller_CCreatestream
{
	function Controller_CCreatestream()
	{
		if(!isset($_SESSION['admin']['id']) && !isset($_SESSION['admin']['id']))
		header("Location:?do=login");
	}

	function Createstream()
	{
		if($_SESSION['prive'][0]=='')
		{
			header('Location:?do=notallow'); exit;
		}
		include("classes/Lib/HandleErrors.php");
		include_once('classes/Model/MCreatestream.php');
		include_once('classes/Display/DCreatestream.php');
		if(count($Err->messages) > 0)
		{
			$output['errval'] = $Err->values;
			$output['errmsg'] = $Err->messages;
			$output["styles"] = $Err->style;
		} 
		$output['errmessage'] = Model_MCreatestream::sMesssage($output['errval'],$output['errmsg']);
		$output['rec_id']=Model_MCreatestream::createId();
		$objstream = new Model_MCreatestream();
		Bin_Template::CreateTemplate('create_stream.html',$output);
	}
	
	function insertStream()
	{
		include('classes/Lib/ValidateInputs.php');
		include_once('classes/Model/MCreatestream.php');
		include_once('classes/Display/DCreatestream.php');
		new Lib_ValidateInputs('insertstream');
                $output['addstream']=Model_MCreatestream::insertStream();
	}

	function Viewstream()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include('classes/Model/MCreatestream.php');
		include('classes/Display/DCreatestream.php');
		$output['viewstreams'] = Model_MCreatestream::Viewstream();
		Bin_Template::CreateTemplate('view_stream.html',$output);
		unset($_SESSION['stream']);
		unset($_SESSION['delstream']);
		unset($_SESSION['upstream']);
	}
	
	function ajaxViewstream()
	{
		include_once('classes/Lib/CommonAjaxPaging.php');
		include('classes/Model/MCreatestream.php');
		include('classes/Display/DCreatestream.php');
		$output['viewstreams'] = Model_MCreatestream::Viewstream();
		Bin_Template::CreateTemplate('ajaxviewstream.html',$output);
//		echo "By Kumar" exit;
	}
	
	function editStream()
	{	
		if($_SESSION['prive'][1]=='')
		{
			header('Location:?do=notallow'); exit;
		}
		include("classes/Lib/HandleErrors.php");
		include_once('classes/Model/MCreatestream.php');
		include_once('classes/Display/DCreatestream.php');
		if(count($Err->messages) > 0)
		{
			$output['errval'] = $Err->values;
			$output['errmsg'] = $Err->messages;
			$output["styles"] = $Err->style;
		} /*echo count($output['errmsg']); exit;*/
		$output['errmessage'] = Model_MCreatestream::editMesssage($output['errval'],$output['errmsg']);

		$objstream = new Model_MCreatestream();
		$output['editstream'] = Model_MCreatestream::editStream($output['errmsg']);
		Bin_Template::CreateTemplate('edit_stream.html',$output);
	}
	
	function updateStream()
	{
		include('classes/Lib/ValidateInputs.php');
		include_once('classes/Model/MCreatestream.php');
		include_once('classes/Display/DCreatestream.php');
		new Lib_ValidateInputs('updatestream');
		Model_MCreatestream::updateStream();
	}
	
	function deleteStream()
	{
		if($_SESSION['prive'][2]=='')
		{
			header('Location:?do=notallow'); exit;
		}
		include('classes/Model/MCreatestream.php');
		Model_MCreatestream::deleteStream();
	}
	
	function Sendstream()
	{
		if($_SESSION['prive'][3]=='')
		{
			header('Location:?do=notallow'); exit;
		}
		Bin_Template::CreateTemplate('send_stream.html');
	}

	function showStream()
	{	
		include_once('classes/Model/MCreatestream.php');
		include_once('classes/Display/DCreatestream.php');
		$output['showstream'] = Model_MCreatestream::showStream();
		Bin_Template::CreateTemplate('show_stream.html',$output);
	}
}
?>