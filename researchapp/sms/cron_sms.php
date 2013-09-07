<?php
echo "<pre>";
error_reporting(E_ALL);
$con=mysql_connect("localhost","bephit_cancer","ajsquare4321");
mysql_select_db("bephit_cancer",$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql1=mysql_query($quer,$con);
$tot_amount=0;

$currday=date("D"); 
$currentdate=date('Y-m-d');
/*$currentdate='2012-08-26';*/
$hou=date('h'); 
$tim=date('A'); 
$time=$hou.$tim; 	  


 
 
function smsPush($phone,$message)
{
	require_once "Services/Twilio.php";
	
	$sel=mysql_query("SELECT * FROM text_msg_api WHERE msg_id='1'");
	$msg1 = mysql_fetch_array($sel);
	$AccountSid = $msg1['account_sid']; 
	$AuthToken = $msg1['auth_token'];
	$client = new Services_Twilio($AccountSid, $AuthToken); 

	$sms = $client->account->sms_messages->create($msg1['mob_num'], $phone,	$message);	

	if($sms)
	{
		return $output = 1;
	}
}


$res=mysql_query("select * from broad_cast_table WHERE SUBSTRING(start_date,1,10) <= '".$currentdate."' AND (fstream_time  ='".$time."' OR sstream_time  ='".$time."' ) AND status = '0'"

//  $res=mysql_query("select * from broad_cast_table WHERE SUBSTRING(start_date,1,10) <= '".$currentdate."' AND status = '0'");  



	while($row = mysql_fetch_array($res))
	{

		

			$glo_group_id=$row['group_id']; 
			$glo_steam_id=$row['steam_id'];
			$glo_broad_id=$row['broad_id'];
			$fe=$row['frequency'];
			$day=$row['stream_week_day'];
			$glo_strating_date=substr($row['start_date'], 0,10); 

		if(($fe == 2 && $currday == $day) || ($fe == 0 || $fe == 1 ))
		{
			$exec='1';
		}
		
		else
		{
			$exec = '2';
		}


			if($exec == '1')
			{

				$participants=mysql_query("select * from participants_table WHERE group_name='".$glo_group_id."'");
				while($part = mysql_fetch_array($participants))
				{
					
				
				
					if($glo_strating_date == $currentdate)
					{
	
						$query ="INSERT INTO msg_send_table (`broad_id` ,`participant_id`,msg_send_id,stream_id)VALUES ('".$glo_broad_id."', '".$part['participants_id']."','0', '".$glo_steam_id."')"; 
						mysql_query($query);
						$insert_id=mysql_insert_id();
						
						$msg=mysql_query("select stream_message from message_stream WHERE stream_id= '".$glo_steam_id."' AND msg_count='1'"); 
		
						$val=mysql_fetch_assoc($msg);
						
						//echo "<br> ".$val['stream_message'];
						if($val['stream_message'] != '')
						{
							$phone = $part['mobile_num']; 
							$message = $val['stream_message']; 
	
	// 					go to  msg functions	
							
							$sms_push = smsPush($phone,$message);
							
							//$sms = 1;
						
	
	// 					go to  msg functions	
							if($sms_push == 1)
							{
									
								$down_sql1=mysql_query("UPDATE msg_send_table SET msg_send_id='1' WHERE id='".$insert_id."'"); 
								echo "1Msg Successfully Send "; 	
							}
							else
							{
							echo "Msg not Send ";	
							}
						}
						
// 	
					}
					else
					{
						$parti=mysql_query("select * from msg_send_table WHERE broad_id='".$glo_broad_id."'");
						while($pa = mysql_fetch_array($parti))
						{
							$msg_send_id=$pa['msg_send_id']+1;
							$msg=mysql_query("select stream_message from message_stream WHERE stream_id= '".$glo_steam_id."' AND msg_count='".$msg_send_id."'"); 
							$val=mysql_fetch_assoc($msg);
/*							$msg_content=$val['stream_message']; */
/*							$mobile_num=$part['mobile_num']; */
							if( $val['stream_message'] != '')
							{		
	// 					go to  Msg functions	
	
								$phone = $part['mobile_num'];
								$message = $val['stream_message'];
								
								$sms_push = smsPush($phone,$message);
							
							//$sms = 1;
						
	
	// 					go to  msg functions	
							if($sms_push == 1)
								{	
									$down_sql1=mysql_query("UPDATE msg_send_table SET msg_send_id='".$msg_send_id."' WHERE id='".$pa['id']."'");
									echo "Message Successfully Send ";	
	
								}
								else
								{
									echo "Message not Send ";
	
	
								} 
						      }	
						
						}	
						
	
	
					}	
	
				}


			}
	}	

?>
