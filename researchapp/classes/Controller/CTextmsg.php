<?php
// error_reporting(E_ALL);
class Controller_CTextmsg
{
	function Controller_CTextmsg()
	{
		if(!isset($_SESSION['admin']['id']) && !isset($_SESSION['admin']['id']))
		header("Location:?do=login");
	}
	function txtmsg()
	{
		include_once("classes/Lib/HandleErrors.php");
		include('classes/Model/MTextmsg.php');
		$output['errmsg'] = $Err->messages;
		$output['errval'] = $Err->values;
		$output['reco'] = Model_MTextmsg::txtmsg();
// 		include_once('classes/Lib/Mail.php');
// 		$mail = new Lib_Mail();
// 		$mail->From('kumarappan@gmail.com'); 
// 		$mail->ReplyTo('kumarappan@gmail.com');
// 		$mail->To('9688117336@vtext.com');
// 		$mail->Subject('hi hello tis from php to mobile');
// 		$mail->Body('hi hello tis from php to mobile');
// 		$mail->Send();
// 		mail( '9688117336@vtext.com', '', 'hi hello tis from php to mobile Testing');
// 		if(!$mail)
// 		{
// 			print_r($mail); exit;
// 		}
		Bin_Template::createTemplate('txtmsg.html',$output);
		unset($_SESSION['msg']);
	}
	
	function inserttxtmsg()
	{
		include('classes/Model/MTextmsg.php');
		include_once('classes/Lib/ValidateInputs.php');
		new Lib_ValidateInputs('inserttxtmsg');
		Model_MTextmsg::inserttxtmsg();
		header('Location:?do=textmsg');
	}
}
?>