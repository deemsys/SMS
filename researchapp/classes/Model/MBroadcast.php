<?php
// error_reporting(E_ALL);
class Model_MBroadcast
{	
	

	function CreateId()
	{
		$con='#';
	
		$characters_tran='2';	
		$possible_tran = 'abcdefghijklmnopqrstuvwxyz';
			$code_tran = '';
			$t = 0;
			while ($t < $characters_tran) { 
				$code_tran .= substr($possible_tran, mt_rand(0, strlen($possible_tran)-1), 1);
				$t++;
	
			}
				$obj=new Bin_Query();
				$sq="SELECT MAX(SUBSTRING(broad_id,4,5)) as br_id FROM broad_cast_table"; 
				$obj->executeQuery($sq);
				$br_id=$obj->records[0]['br_id'];

				if($br_id != '')
				{

					$br_id1=$br_id+1;

				}
				else
				{

					$br_id1='10000';


				}
			  $tot_id=$con.$code_tran.$br_id1;  
			return $tot_id;
		

	}

	function streamName($err)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM stream";
		$obj->executeQuery($sql);
		$rec=$obj->records;
	return Display_DBroadcast::streamName($rec,$err);	


	}

	function groupName($err)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM group_table";
		$obj->executeQuery($sql);
		$rec=$obj->records;
	return Display_DBroadcast::groupName($rec,$err);	


	}

	function UpdatBroadCast()
	{
		

		include('classes/Model/MParticipants.php');

		$st_date = date("Y-m-d", strtotime($_POST['st_date'])); 	

				$obj=new Bin_Query();

		if($_POST['fre'] == '0')
		{
	 	$sql="INSERT INTO broad_cast_table (broad_id,steam_id,group_id,frequency,start_date,fstream_time) VALUES('".$_POST['br_id']."','".$_POST['stream']."','".$_POST['group']."','".$_POST['fre']."','".$st_date."','".$_POST['ftime_one']."')"; 
		}
		else if($_POST['fre'] == '1')
		{
		$sql="INSERT INTO broad_cast_table (broad_id,steam_id,group_id,frequency,start_date,fstream_time,sstream_time) VALUES('".$_POST['br_id']."','".$_POST['stream']."','".$_POST['group']."','".$_POST['fre']."','".$st_date."','".$_POST['ftime_two']."','".$_POST['stime_two']."')"; 


		}
		else if($_POST['fre'] == '2')	
		{

		$sql="INSERT INTO broad_cast_table (broad_id,steam_id,group_id,frequency,start_date,fstream_time,stream_week_day) VALUES('".$_POST['br_id']."','".$_POST['stream']."','".$_POST['group']."','".$_POST['fre']."','".$st_date."','".$_POST['ftime_three']."','".$_POST['day_name_three']."')"; 
		}
		

		if($obj->updateQuery($sql))
		{
			$con='Started a Broadcast of Stream '.$_POST['stream'];

				Model_MParticipants::activityInfo($con);

			$_SESSION['broadcast']="Broadcast Created Successfully";
			header('Location:?do=broadcast');
		}
	

	}

	function viewReports()
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
			$pagesize = 20;
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
// 		if(isset($_GET['sortby']))
// 		{
// 
// 			$sqlCondall.=" WHERE  (blog_title LIKE '".trim($_GET['sortby'])."%' AND created_id ='".$_SESSION['admin']['id']."')";	
// 		}
	

		$obj1=new Bin_Query();
		
		
		$sql1="SELECT * FROM broad_cast_table ORDER BY br_id DESC"; 

		

		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1_find=new Bin_Query();
			
				$sql_find="SELECT * FROM broad_cast_table ORDER BY br_id DESC"; 
		
				
					$obj1_find->executeQuery($sql_find);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
	
			$obj1_find=new Bin_Query();


			
			$sql_find="SELECT * FROM broad_cast_table ORDER BY br_id DESC LIMIT $start,$end"; 
	
			


			 
			$obj1_find->executeQuery($sql_find);
		}
		return Display_DBroadcast::viewReports($obj1_find->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);


	}

	


	
}
?>