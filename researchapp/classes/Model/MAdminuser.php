<?php
// error_reporting(E_ALL);
class Model_MAdminuser
{	
	function insertAdminuser()
	{
		include("classes/Lib/class.smtp.php");
		include("classes/Lib/class.phpmailer.php");

		$date=date('Y-m-d H:i:s');
		$name = trim($_POST['name']);
		$password = trim(md5(md5($_POST['password'])));
		$email = trim($_POST['email']);
		$mobile = $_POST['mobile'];
		$address = trim($_POST['address']);
		$previ = $_POST['addstream'].",". $_POST['editstream'].",". $_POST['deletestream'].",". $_POST['broadcaststream'].",". $_POST['addparticipant'].",". $_POST['editparticipant'].",". $_POST['deleteparticipant'].",". $_POST['addadminuser'].",". $_POST['edituser'].",". $_POST['deleteuser'].",". $_POST['modifysettings'].",". $_POST['mailtemplate'];

		$obj=new Bin_Query();
		$sql="INSERT INTO admin_log_table (admin_username, admin_password, admin_email, admin_mobile, admin_address,previlages,date,status) VALUES('".$name."','".$password."','".$email."','".$mobile."','".$address."','".$previ."','".$date."',1)";
		if($obj->updateQuery($sql))
		{	
			$_SESSION['adduser']="User Added Successfully";
			
			$query2 = new Bin_Query();
			$select2="SELECT * FROM mail_template WHERE mail_template_name='welcomeadminuser'";
			$query2->executeQuery($select2);
			$recd = $query2->records[0];
		
			$smtp_host=$recd['smtp_servername'];
	       		$smtp_port=$recd['port'];	
	        	$smtp_username=$recd['username'];
	        	$smtp_password=$recd['password'];


			$mailfrom = $recd['from_mail'];
			$mailsubject = $recd['mail_subject'];

			$ourl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$aurl = explode("?", $ourl);  $url = $aurl[0];
			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<password>","<logo>","<url>");
			$arr2 = array($name,$_POST['password'],$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $recd['message']);
			$mailContent = $content;
			
			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $email;				


					$mail = new PHPMailer(true); 
					$mail->IsSMTP(); // telling the class to use SMTP
					$Body = "";
				try {

					$mail->Host     = $smtp_host;
					$mail->SMTPAuth = true;          // turn on SMTP authentication
					$mail->Username = $smtp_username;
					$mail->Password = $smtp_password;
					$mail->Port     = $smtp_port;   
					$mail->From     = $mailfrom;
					$mail->AddAddress($mailTo , $ToName);
/*					$mail->SMTPSecure == 'ssl';*/
					$mail->WordWrap = 50;                // set word wrap
					$mail->Priority = 1;
					$mail->Subject  =  $mailsubject;
					$mail->AltBody     = 'To view this email message, open it in a program that understands HTML!' . "\n\n";
					
					$mail->MsgHTML($mailbody);
					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
					//echo "ad1";
					echo $e->getMessage(); //Boring error messages from anything else!
				}			
			}
// 			print_r($mail);
			header('Location:?do=viewadminuser');
		}
	}
	
	
	function viewAdminuser()
	{
		if(isset($_GET['size']) && ($_GET['pagesize']=='load'))
		{
			$_SESSION['pagesize'] = (int)$_GET['size'];
		}
		if(isset($_SESSION['pagesize']))
		{
			$pagesize = $_SESSION['pagesize'];
		}
		else
		{
			// pagesize is not selected here u can set the default pagesize
			unset($_SESSION['pagesize']);
			$_SESSION['pagesize']=='';
			$pagesize = 10;
		}
		if(isset($_GET['page']))
		{			
			 $start = trim($_GET['page']-1) *  $pagesize;
			 $end =  $pagesize;
		}	
		else 
		{
			$start = 0;
			$end =  $pagesize;
		}
	
		$total=0;
		//this condition is used for alphabetic filter
		if(isset($_GET['sortby']))
		{

			$sqlCondall.=" WHERE  (blog_title LIKE '".trim($_GET['sortby'])."%' AND created_id ='".$_SESSION['admin']['id']."')";	
		}
	

		$obj1=new Bin_Query();
		$sql1="SELECT * FROM admin_log_table ORDER BY admin_id DESC"; 
		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1=new Bin_Query();
		 $sql1="SELECT * FROM admin_log_table ORDER BY admin_id DESC"; 
			$obj1->executeQuery($sql1);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
	
			$obj1=new Bin_Query();
			 $sql1="SELECT * FROM admin_log_table ORDER BY admin_id DESC LIMIT $start,$end"; 
			$obj1->executeQuery($sql1);
		}
		
		return Display_DAdminuser::viewAdminuser($obj1->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);

		
	}
	
	function userDetail()
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM admin_log_table WHERE admin_id ='".$_GET['userid']."'"; 
		$obj->executeQuery($sql);
		return Display_DAdminuser::userDetail($obj->records);
	}
	
	function editUser($errmsg)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM admin_log_table WHERE admin_id = '".$_GET['userid']."'"; 
		$obj->executeQuery($sql);
		return Display_DAdminuser::editUser($obj->records,$errmsg);
	}
	
	function deleteUser()
	{
		include("classes/Lib/class.smtp.php");
		include("classes/Lib/class.phpmailer.php");
		
		if(isset($_POST['delete']))
		{
		foreach($_POST['checkbox'] as $key=>$item)
		{
		$que = new Bin_Query();
		$sqls = "SELECT admin_email FROM admin_log_table WHERE admin_id = '".$item."'";
		$que->executeQuery($sqls);
		$reco = $que->records[0];
		$_SESSION['email'] = $reco['admin_email'];
		$email = $_SESSION['email'];
		
		
		$obj= new Bin_Query();
		$sql="DELETE FROM admin_log_table WHERE admin_id='".$item."'";
		if($obj->updateQuery($sql))
		{
			$query2 = new Bin_Query();
			$select2="SELECT * FROM mail_template WHERE mail_template_name='youraccountdeletes'";
			$query2->executeQuery($select2);
			$recd = $query2->records[0];
			
			
			$smtp_host=$recd['smtp_servername'];
	       		$smtp_port=$recd['port'];	
	        	$smtp_username=$recd['username'];
	        	$smtp_password=$recd['password'];


			$mailfrom = $recd['from_mail'];
			$mailsubject = $recd['mail_subject'];
			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<message>","<logo>","<url>");
			$arr2 = array($reco['admin_username'],$recd['mail_subject'],$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $recd['message']);
			$mailContent = $content;
			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $email;				


					$mail = new PHPMailer(true); 
					$mail->IsSMTP(); // telling the class to use SMTP
					$Body = "";
				try {

					$mail->Host     = $smtp_host;
					$mail->SMTPAuth = true;          // turn on SMTP authentication
					$mail->Username = $smtp_username;
					$mail->Password = $smtp_password;
					$mail->Port     = $smtp_port;   
					$mail->From     = $mailfrom;
					$mail->AddAddress($mailTo , $ToName);
/*					$mail->SMTPSecure == 'ssl';*/
					$mail->WordWrap = 50;                // set word wrap
					$mail->Priority = 1;
					$mail->Subject  =  $mailsubject;
					$mail->AltBody     = 'To view this email message, open it in a program that understands HTML!' . "\n\n";
					
					$mail->MsgHTML($mailbody);
					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
					//echo "ad1";
					echo $e->getMessage(); //Boring error messages from anything else!
				}
			
			}
			header('Location:?do=viewadminuser');
		}
		}
		}
		else
		{
		$que = new Bin_Query();
		$sqls = "SELECT admin_email FROM admin_log_table WHERE admin_id = '".$_GET['userid']."'";
		$que->executeQuery($sqls);
		$reco = $que->records[0];
		$_SESSION['email'] = $reco['admin_email'];
		$email = $_SESSION['email'];

		$obj=new Bin_Query();
		$sql="DELETE FROM admin_log_table WHERE admin_id = '".$_GET['userid']."'";
		if($obj->updateQuery($sql))
		{
			$_SESSION['delete'] = "Successfully User Delete";
			
			$query2 = new Bin_Query();
			$select2="SELECT * FROM mail_template WHERE mail_id=5";
			$query2->executeQuery($select2);
			$recd = $query2->records[0];
			
			
			$smtp_host=$recd['smtp_servername'];
	       		$smtp_port=$recd['port'];	
	        	$smtp_username=$recd['username'];
	        	$smtp_password=$recd['password'];


			$mailfrom = $recd['from_mail'];
			$mailsubject = $recd['mail_subject'];
			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<message>","<logo>","<url>");
			$arr2 = array($reco['admin_username'],$recd['mail_subject'],$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $recd['message']);
			$mailContent = $content;
			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $email;				


					$mail = new PHPMailer(true); 
					$mail->IsSMTP(); // telling the class to use SMTP
					$Body = "";
				try {

					$mail->Host     = $smtp_host;
					$mail->SMTPAuth = true;          // turn on SMTP authentication
					$mail->Username = $smtp_username;
					$mail->Password = $smtp_password;
					$mail->Port     = $smtp_port;   
					$mail->From     = $mailfrom;
					$mail->AddAddress($mailTo , $ToName);
/*					$mail->SMTPSecure == 'ssl';*/
					$mail->WordWrap = 50;                // set word wrap
					$mail->Priority = 1;
					$mail->Subject  =  $mailsubject;
					$mail->AltBody     = 'To view this email message, open it in a program that understands HTML!' . "\n\n";
					
					$mail->MsgHTML($mailbody);
					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
					//echo "ad1";
					echo $e->getMessage(); //Boring error messages from anything else!
				}
			
			}
			header('Location:?do=viewadminuser');
		}
		}
	}
	
	function activeUser()
	{	
		include("classes/Lib/class.smtp.php");
		include("classes/Lib/class.phpmailer.php");
		if($_GET['status']==1)
		{
		$obj=new Bin_Query();
		$sql="UPDATE admin_log_table SET status = 0 WHERE admin_id = '".$_GET['userid']."'";
		if($obj->updateQuery($sql))
		{	
			$_SESSION['suspend']="User Suspend Successfully";
			
			$que = new Bin_Query();
			$sqls = "SELECT admin_email,admin_username FROM admin_log_table WHERE admin_id = '".$_GET['userid']."'";
			$que->executeQuery($sqls);
			$reco = $que->records[0];
				
			$email = $reco['admin_email']; 
			
			$query2 = new Bin_Query();
			$select2="SELECT * FROM mail_template WHERE mail_template_name='youraccountsuspend'";
			$query2->executeQuery($select2);
			$recd = $query2->records[0];
			
			
			$smtp_host=$recd['smtp_servername'];
	       		$smtp_port=$recd['port'];	
	        	$smtp_username=$recd['username'];
	        	$smtp_password=$recd['password'];


			$mailfrom = $recd['from_mail'];
			$mailsubject = $recd['mail_subject'];
			
			$ourl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$aurl = explode("?", $ourl);  $url = $aurl[0];
			
			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<message>","<logo>","<url>");
			$arr2 = array($reco['admin_username'],$recd['mail_subject'],$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $recd['message']);
			$mailContent = $content;	
			
			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $email;				


					$mail = new PHPMailer(true); 
					$mail->IsSMTP(); // telling the class to use SMTP
					$Body = "";
				try {

					$mail->Host     = $smtp_host;
					$mail->SMTPAuth = true;          // turn on SMTP authentication
					$mail->Username = $smtp_username;
					$mail->Password = $smtp_password;
					$mail->Port     = $smtp_port;   
					$mail->From     = $mailfrom;
					$mail->AddAddress($mailTo , $ToName);
/*					$mail->SMTPSecure == 'ssl';*/
					$mail->WordWrap = 50;                // set word wrap
					$mail->Priority = 1;
					$mail->Subject  =  $mailsubject;
					$mail->AltBody     = 'To view this email message, open it in a program that understands HTML!' . "\n\n";
					
					$mail->MsgHTML($mailbody);
					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
					//echo "ad1";
					echo $e->getMessage(); //Boring error messages from anything else!
				}
			
			}
// 			print_r($mail); exit;
			header('Location:?do=viewadminuser');
		}
		}
		else
		{
		$obj=new Bin_Query();
		$sql="UPDATE admin_log_table SET status = 1 WHERE admin_id = '".$_GET['userid']."'";
		if($obj->updateQuery($sql))
		{	
			$_SESSION['active']="User Activated Successfully";
			
			$que = new Bin_Query();
			$sqls = "SELECT admin_email,admin_username FROM admin_log_table WHERE admin_id = '".$_GET['userid']."'";
			$que->executeQuery($sqls);
			$reco = $que->records[0];
				
			$email = $reco['admin_email']; 
			
			$query2 = new Bin_Query();
			$select2="SELECT * FROM mail_template WHERE mail_template_name='youraccountactivated'";
			$query2->executeQuery($select2);
			$recd = $query2->records[0];
			
			
			$smtp_host=$recd['smtp_servername'];
	       		$smtp_port=$recd['port'];	
	        	$smtp_username=$recd['username'];
	        	$smtp_password=$recd['password'];


			$mailfrom = $recd['from_mail'];
			$mailsubject = $recd['mail_subject'];

			$ourl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$aurl = explode("?", $ourl);  $url = $aurl[0];

			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<message>","<logo>","<url>");
			$arr2 = array($reco['admin_username'],$recd['mail_subject'],$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $recd['message']);
			$mailContent = $content;
			
			
			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $email;				


					$mail = new PHPMailer(true); 
					$mail->IsSMTP(); // telling the class to use SMTP
					$Body = "";
				try {

					$mail->Host     = $smtp_host;
					$mail->SMTPAuth = true;          // turn on SMTP authentication
					$mail->Username = $smtp_username;
					$mail->Password = $smtp_password;
					$mail->Port     = $smtp_port;   
					$mail->From     = $mailfrom;
					$mail->AddAddress($mailTo , $ToName);
/*					$mail->SMTPSecure == 'ssl';*/
					$mail->WordWrap = 50;                // set word wrap
					$mail->Priority = 1;
					$mail->Subject  =  $mailsubject;
					$mail->AltBody     = 'To view this email message, open it in a program that understands HTML!' . "\n\n";
					
					$mail->MsgHTML($mailbody);
					$mail->Send();
				} catch (phpmailerException $e) {
					echo $e->errorMessage(); //Pretty error messages from PHPMailer
				} catch (Exception $e) {
					//echo "ad1";
					echo $e->getMessage(); //Boring error messages from anything else!
				}
			
			}
/*			print_r($mail);exit;*/
			
			header('Location:?do=viewadminuser');
		}
		}
		
	}
	
	function updateAdminuser()
	{
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$mobile = $_POST['mobile'];
		$address = trim($_POST['address']);

		$previ = $_POST['addstream'].",". $_POST['editstream'].",". $_POST['deletestream'].",". $_POST['broadcaststream'].",". $_POST['addparticipant'].",". $_POST['editparticipant'].",". $_POST['deleteparticipant'].",". $_POST['addadminuser'].",". $_POST['edituser'].",". $_POST['deleteuser'].",". $_POST['modifysettings'].",". $_POST['mailtemplate'];

		$obj=new Bin_Query();
		$sql="UPDATE admin_log_table SET admin_username='".$name."', admin_email='".$email."', admin_mobile='".$mobile."', admin_address='".$address."', previlages='".$previ."' WHERE admin_id='".$_GET['userid']."'";
		if($obj->updateQuery($sql))
		{	
			$_SESSION['update']="User Detail Update Successfully";
			header('Location:?do=viewadminuser');
		}
	}
	
	function activityOfAdmin()
	{
		if(isset($_GET['size']) && ($_GET['pagesize']=='load'))
		{
			$_SESSION['pagesize'] = (int)$_GET['size'];
		}
		if(isset($_SESSION['pagesize']))
		{
			$pagesize = $_SESSION['pagesize'];
		}
		else
		{
			// pagesize is not selected here u can set the default pagesize
			unset($_SESSION['pagesize']);
			$_SESSION['pagesize']=='';
			$pagesize = 10;
		}
		if(isset($_GET['page']))
		{			
			 $start = trim($_GET['page']-1) *  $pagesize;
			 $end =  $pagesize;
		}	
		else 
		{
			$start = 0;
			$end =  $pagesize;
		}
	
		$total=0;
		//this condition is used for alphabetic filter
		if(isset($_GET['sortby']))
		{

			$sqlCondall.=" WHERE  (blog_title LIKE '".trim($_GET['sortby'])."%' AND created_id ='".$_SESSION['admin']['id']."')";	
		}
	

		$obj1=new Bin_Query();
		$sql1="SELECT * FROM admin_log_activity_table WHERE admin_id ='".$_SESSION['admin']['id']."'	 ORDER BY log_id  DESC"; 
		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1=new Bin_Query();
		 	$sql1="SELECT * FROM admin_log_activity_table WHERE admin_id ='".$_SESSION['admin']['id']."'	 ORDER BY log_id  DESC"; 
			$obj1->executeQuery($sql1);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
	
			$obj1=new Bin_Query();
			 $sql1="SELECT * FROM admin_log_activity_table WHERE admin_id ='".$_SESSION['admin']['id']."' ORDER BY log_id  DESC LIMIT $start,$end"; 
			$obj1->executeQuery($sql1);
		}
		
		return Display_DAdminuser::activityOfAdmin($obj1->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);

		
	}
}
?>