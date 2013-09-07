<?php
echo "<pre>";
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("madical",$con);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql1=mysql_query($quer,$con);
$tot_amount=0;


$currentdate=date('Y-m-d');
/*$currentdate='2012-08-26';*/
$hou=date('h'); 
$tim=date('A'); 
$time=$hou.$tim; 	  


  $res=mysql_query("select * from broad_cast_table WHERE SUBSTRING(start_date,1,10) <= '".$currentdate."' AND stream_time ='".$time."' AND status = '0'");  

	while($row = mysql_fetch_array($res))
	{

			$glo_group_id=$row['group_id'];
			$glo_steam_id=$row['steam_id'];
			$glo_broad_id=$row['broad_id'];

			$glo_strating_date=substr($row['start_date'], 0,10); 

	

		if($row['frequency'] == 'One Per Day')
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
					$msg_content=$val['stream_message'];
					$mobile_num=$part['mobile_num'];


// 					go to  msg functions	

// 					go to  msg functions	
					
					$down_sql1=mysql_query("UPDATE msg_send_table SET msg_send_id='1' WHERE id='".$insert_id."'"); 


				}
				else
				{
					$parti=mysql_query("select * from msg_send_table WHERE broad_id='".$glo_broad_id."'");
					while($pa = mysql_fetch_array($parti))
					{
						$msg_send_id=$pa['msg_send_id']+1;
						$msg=mysql_query("select stream_message from message_stream WHERE stream_id= '".$glo_steam_id."' AND msg_count='".$msg_send_id."'"); 
						$val=mysql_fetch_assoc($msg);
						$msg_content=$val['stream_message']; 
						$mobile_num=$part['mobile_num']; 
						
// 					go to  msg functions	

// 					go to  msg functions	
					
						$down_sql1=mysql_query("UPDATE msg_send_table SET msg_send_id='".$msg_send_id."' WHERE id='".$pa['id']."'"); 
					
					}	
					


				}	

			}


		}
	}	

?>
