<?php
// error_reporting(E_ALL);
class Model_MTextmsg
{	
	function txtmsg()
	{
		$msg=new Bin_Query();
		$smsg="SELECT * FROM text_msg_api WHERE msg_id='1'";	
		$msg->executeQuery($smsg);
		$reco=$msg->records[0];
		return $reco;
	}
	
	function inserttxtmsg()
	{
		$txt=new Bin_Query();
		$msg="UPDATE text_msg_api SET account_sid='".$_POST['asid']."',auth_token='".$_POST['token']."',mob_num='".$_POST['mnumber']."' WHERE msg_id='1'";
		if($txt->updateQuery($msg))
		{
			$_SESSION['msg']="API UPDATE SUCCESSFULLY";
			header('Location:?do=textmsg');
		}
	}
	
}
?>