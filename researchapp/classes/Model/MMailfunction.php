<?php
class Model_MMailfunction
{
	function insertMailtemplate()
	{
		$deletemail = mysql_query("DELETE FROM mail_template WHERE mail_template_name='".$_POST['select']."'");
		$obj=new Bin_Query();
		$sql="INSERT INTO mail_template(mail_template_name, mail_subject, from_name, from_mail, replay_mail, smtp_servername, port, username, password, message) values('".$_POST['select']."','".$_POST['subject']."','".$_POST['fname']."','".$_POST['fmail']."','".$_POST['rmail']."','".$_POST['smtp']."','".$_POST['port']."','".$_POST['uname']."','".$_POST['password']."','".$_POST['message']."')"; 
		if($obj->updateQuery($sql))
		{
			$_SESSION['mail']="Mail Template Update Successfully";
			header('Location:?do=addmailtemplate&id='.$_GET['id'].'');
		}
	}
	
	function selectMailtemp()
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM mail_template WHERE mail_template_name ='".$_GET['id']."'";  
		$obj->executeQuery($sql);
		$recc=$obj->records[0];
		return $recc;
	}
}
?>