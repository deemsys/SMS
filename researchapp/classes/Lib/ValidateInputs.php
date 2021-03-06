<?php
/***************************************************************************

 * Product Name				: AJ MATRIX DNA

 * Version 				: V 3.1

 * Release Date				: Saturday, October 31, 2009

 * Copyright				: (C) 2009 AJ Square Inc

 * Email				: info@ajsquare.com

 * Company URL				: www.ajsquare.com

 ***************************************************************************/

/****************************************************************************
* Licence Agreement: 

 *     This program is a Commercial licensed software. You are not authorized to redistribute it and/or modify/and or sell it under any publication either user and enterprise versions of the License (or) any later version is applicable for the same. If you have received this software without a license, you must not use it, and you must destroy your copy of it immediately. If anybody illegally uses this software, please contact info@ajsquare.com.

*****************************************************************************/
?>

<?php
class Lib_ValidateInputs
{
	function Lib_ValidateInputs($module)
	{
		
		if($module=='logincheck')
			$this->validateLogincheck();
		elseif($module=='verify')
			$this->validateverify();
		elseif($module=='addAdminuser')
			$this->addAdminuser();
		elseif($module=='updateAdminuser')
			$this->updateAdminuser();
		elseif($module=='changepassword')
			$this->changepassword();
		elseif($module=='addmailtemp')
			$this->addmailtemp();
		elseif($module=='checkemail')
			$this->checkemail();
		elseif($module=='updategroup')
			$this->updategroup();
		elseif($module=='insertparticipants')
			$this->insertparticipants();
		elseif($module=='updateparticipants')
			$this->updateparticipants();
		elseif($module=='updatbroadcast')
			$this->updatbroadcast();
		elseif($module=='insertstream')
			$this->insertstream();
		elseif($module=='updatestream')
			$this->updatestream();
		elseif($module=='editupdategroup')
			$this->editupdategroup();
		elseif($module=='inserttxtmsg')
			$this->inserttxtmsg();
			
	}
	
	function inserttxtmsg()	
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
				$obj = new Lib_FormValidation('inserttxtmsg');
		}
		else
		{
			header("Location:?do=textmsg");exit();
		}
	}
	
	function updatbroadcast()	
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
				$obj = new Lib_FormValidation('updatbroadcast');
		}
		else
		{
			header("Location:?do=broadcast");exit();
		}
	}

	function insertstream()
	{	
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{
			$obj = new Lib_FormValidation('insertstream');
		}
		else
		{
			header("Location:?do=createstream");exit();
		}
	}

	function updatestream()
	{	
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{
			$obj = new Lib_FormValidation('updatestream');
		}
		else
		{
			header("Location:?do=editstream&streamid='".$_GET['streamid']."'");exit();
		}
	}
	function validateLogincheck()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
				$obj = new Lib_FormValidation('logincheck');
		}
		else
		{
			header("Location:?do=login");exit();
		}
	}
	
	function addAdminuser()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('addAdminuser');
		}
		else
		{
			header("Location:?do=addadminuser");exit();
		}
	}
	
	function updateAdminuser()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('updateAdminuser');
			
		}
		else
		{
			header("Location:?do=edituser&userid=".$_GET['userid']."");exit();
		}
	}

	function changepassword()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('changepassword');
		}
		else
		{
			header("Location:?do=changepassword");exit();
		}
	}
	
	function addmailtemp()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('addmailtemp');
		}
		else
		{
			header("Location:?do=addmailtemplate&id=".$_GET['id']."");exit();
		}
	}
		
	function checkemail()
	{	
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{
			$obj = new Lib_FormValidation('checkemail');
		}
		else
		{
			header("Location:?do=forgotpassword");exit();
		}
	}
	

	function updateparticipants()
	{  
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
				$obj = new Lib_FormValidation('updateparticipants');

		}
		else
		{
			header("Location:?do=editParticipants&id='".$_GET['part_id']."'");
			exit();
		}
	}


	function insertparticipants()
	{
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
				$obj = new Lib_FormValidation('insertparticipants');
		}
		else
		{
			header("Location:?do=addparticipants&type='".$_GET['type']."'");
			exit();
		}
	}
	
	function updategroup()
	{
// 		echo "kk"; exit;
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('updategroup');
		}
		else
		{
			header("Location:?do=creategroup&type='".$_GET['type']."'");
			exit();
		}
	}
	
	function editupdategroup()
	{
// 		echo "kk"; exit;
		include('classes/Lib/FormValidation.php');
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{ 
			$obj = new Lib_FormValidation('editupdategroup');
		}
		else
		{
			header("Location:?do=editgroup&id='".$_GET['id']."'");
			exit();
		}
	}
}
?>