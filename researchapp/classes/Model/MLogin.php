<?php
class Model_MLogin
{
	function loginCheck()
	{

		$select="select count(*) as count_log,admin_username,admin_id,status from admin_log_table where admin_email='".$_POST['username']."' AND admin_password='".md5(md5($_POST['pwd']))."'"; 
		$obj=new Bin_Query();
		$obj->executeQuery($select);
		$count=$obj->records[0]['count_log']; 
		if($count == '1')
		{
			if($obj->records[0]['status'] == '1')
			{
				$admin_log_id = $obj->records[0]['admin_id'];
			
				$admin_log_ip_used = $_SERVER['REMOTE_ADDR'];
			
				$current_time = date('y-m-d h:i:s');
				
				$insertLog = new Bin_Query();
			
				$sql = "INSERT INTO admin_log_ip_table (admin_log_admin_id,admin_log_ip_used,admin_log_time) VALUES ('".$admin_log_id."','".$admin_log_ip_used."','".$current_time."')"; 
			
				if($insertLog->updateQuery($sql))
				{
				$_SESSION['admin']['admin_log_id']=mysql_insert_id(); 
				$_SESSION['admin']['id']=$obj->records[0]['admin_id'];
				$_SESSION['admin']['username']=$obj->records[0]['admin_username'];
				$_SESSION['admin']['email']=$obj->records[0]['admin_email'];

				$obj=new Bin_Query();
				$sql="SELECT previlages FROM admin_log_table WHERE admin_id = '".$_SESSION['admin']['id']."'"; 
				$obj->executeQuery($sql);
				$rec = $obj->records;
				$previl=explode(",",$rec[0]['previlages']);
				$_SESSION['prive'] = $previl;	
/*print_r($_SESSION['prive']);exit;*/
				header("location:?do=dashboard");
				}
				else
				{
				header("location:?do=login");
				}
			}
			else
			{

				$_SESSION['err']="Your Account has been Suspended.";
				header("location:?do=login");

			}	


		}
		else
		{
			$_SESSION['err']="Invalid Username or Password";
			header("location:?do=login");
		}
	
		


	}
	
	function updatePassword()
	{
		$userid=$_SESSION['admin']['id'];
		$pass = trim(md5(md5($_POST['newpassword'])));

		$query = new Bin_Query();
		$select="UPDATE admin_log_table SET admin_password='".$pass."' WHERE admin_id='".$userid."'";
		if($query->updateQuery($select))
		{
		$records=$query->records[0];
		$_SESSION['pass']="Password changed successfully";
		
		$query1 = new Bin_Query();
		$select1="SELECT * FROM admin_log_table WHERE admin_id='".$userid."'";
		$query1->executeQuery($select1);
		$username=$query1->records[0]['admin_username'];
		$email=$query1->records[0]['admin_email'];
		$records=$query1->records[0];

		
		$newpass="Your password has been changed as '".$_POST['newpassword']."'";
		$subject="your new password";
		$from = "medi@gimail.com";
		$headers = "From:" . $from;
		mail($email,$subject,$newpass,$headers);
		
		header("location:?do=changepassword");
		}
		
	}
	
	
	

function sendForgetPassword()
	{
		include("classes/Lib/class.smtp.php");
		include("classes/Lib/class.phpmailer.php");
	
		$toemail = trim($_POST['email']);
		$query = new Bin_Query();
		$getDetail = new Bin_Query();		
		$sql_detail = "SELECT admin_username FROM admin_log_table WHERE admin_email='".$toemail."'";
		$getDetail->executeQuery($sql_detail);
		
		$record = $getDetail->records[0];
		//Get Random Password		
		$chars = "abcdefghijkmnopqrstuvwxyz023456789";
    		srand((double)microtime()*1000000);
    		$i = 0;
    		$pass = '' ;
		while ($i <= 7) 
		{
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		$sql = "UPDATE admin_log_table SET admin_password='".md5(md5($pass))."' WHERE admin_email = '".$toemail."'";	
		if($query->updateQuery($sql))	
		{
			$getMessage = new Bin_Query();
			$sql_msg = "SELECT * FROM mail_template WHERE mail_template_name='forgetpassword'";
			if($getMessage->executeQuery($sql_msg))
			{	
			$smtp_host=$getMessage->records[0]['smtp_servername'];
	       		$smtp_port=$getMessage->records[0]['port'];	
	        	$smtp_username=$getMessage->records[0]['username'];
	        	$smtp_password=$getMessage->records[0]['password'];


			$mailfrom = $getMessage->records[0]['from_mail'];
			$mailsubject = $getMessage->records[0]['mail_subject'];
			
			$ourl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$aurl = explode("?", $ourl);  $url = $aurl[0];
			$_SESSION['url'] = $url;

			$logo="images/logo.png";
			$sitelogo="<img src='".$url.$logo."'>";
			$arr1 = array("<username>","<password>","<logo>","<url>");
			$arr2 = array($record['admin_username'],$pass,$sitelogo,$url);
			$content = str_replace($arr1, $arr2, $getMessage->records[0]['message']);
			$mailContent = $content; 

			$mailbody= $mailContent;
			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			$headers .= "From: ". $mailfrom."\n";
	
			if($smtp_host != '' AND $smtp_port != '' AND $smtp_username != '' AND $smtp_password != '' )
			{
			

					$mailTo = $toemail;				


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
				
				if($mail)
				{	
				$_SESSION['passw']='Password sucessfully sent to your mailid';
				header("Location:?do=login");exit;
				}
				else
				{
					include_once('classes/Lib/Mail.php');
					$mail = new Lib_Mail();
					$mail->From($mailfrom); 
					$mail->ReplyTo($mailfrom);
					$mail->To($toemail);
					$mail->Subject($mailsubject);
					$mail->Body($mailbody);
					$mail->Send();
				}
			}
			
			}
/*			print_r($mail); exit;*/
			
		}

		
	}
}



?>