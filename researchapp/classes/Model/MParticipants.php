<?php
// error_reporting(E_ALL);
class Model_MParticipants
{	
	function updateGroup()
	{
		$obj=new Bin_Query();
		$sql.="INSERT INTO group_table (group_name, group_scope, group_decs, local_city, local_dojfrom, local_dojto, local_age, local_educations, select_local_group) VALUES('".$_POST['name']."','".$_POST['scope']."','".$_POST['description']."','".$_POST['gcity']."','".$_POST['dojfrom']."','".$_POST['dojto']."','".$_POST['age']."','".$_POST['edu']."','"; 
		
		for($i=0; $i<count($_REQUEST['group']); $i++)
		{
			$s=count($_REQUEST['group']) -1;
			if($i == $s)
			{
			$sql.="".$_REQUEST['group'][$i]."";
			}
			else
			{
			$sql.="".$_REQUEST['group'][$i].",";
			}
		
		}
		$sql.="')"; 
		if($obj->updateQuery($sql))
		{	
			if($_GET['type'] == '1')
			{
			$_SESSION['adduser']="Participant Groups Created Successfully";
			header('Location:?do=addparticipants&type=1');

			}
			else
			{	
			$_SESSION['adduser']="Participant Groups Created Successfully";
			header('Location:?do=creategroup');
			}
		}
	}
	
	function ageFun($err)
	{
	return Display_DParticipants::ageFun($err);
	}

	function listGroup($err)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM group_table WHERE group_scope=0";
		$obj->executeQuery($sql);
		$rec=$obj->records;
		return Display_DParticipants::listGroup($rec,$err);

	}

	function ageFun1($Err)
	{
		$age_qry=new Bin_Query();
		$age_sql="SELECT age FROM participants_table WHERE participants_id='".$_GET['id']."'";
		$age_qry->executeQuery($age_sql);
		$age=$age_qry->records[0]['age'];
		return Display_DParticipants::ageFun1($age,$Err);
	}

	function listGroup1($val)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM group_table WHERE group_scope=0";
		$obj->executeQuery($sql);
		$rec=$obj->records;
		return Display_DParticipants::listGroup1($rec,$val);
	}

	function listGroup2($val)
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM group_table WHERE group_scope=0";
		$obj->executeQuery($sql);
		$rec=$obj->records;
		return Display_DParticipants::listGroup2($rec,$val);
	}

	function insertParticipants()
	{
// 					print_r($_SESSION); exit;

		$obj=new Bin_Query();
		$sql.="INSERT INTO participants_table (fname, lname,gender, mobile_num,city,education,note,medical_details,messaging_frequency,age,email_id,date_of_join,group_name) VALUES('".$_REQUEST['fname']."','".$_REQUEST['lname']."','".$_REQUEST['gender']."','".$_REQUEST['mobile']."','".$_REQUEST['city']."','".$_REQUEST['education']."','".$_REQUEST['note']."','".$_REQUEST['medical']."','".$_REQUEST['frequency']."','".$_REQUEST['up_age']."','".$_REQUEST['email']."','".date('Y-m-d h:i:s')."','";
		for($i=0; $i<count($_REQUEST['group']); $i++)
		{
			$s=count($_REQUEST['group']) -1;
			if($i == $s)
			{
			$sql.="".$_REQUEST['group'][$i]."";

			}
			else
			{
		
			$sql.="".$_REQUEST['group'][$i].",";
			}
		
		}
		$sql.="')";

		if($obj->updateQuery($sql))
		{

			$con='Added a Participant '.$_REQUEST['fname'];

				Model_MParticipants::activityInfo($con);

			$_SESSION['adduser_new']="Participant Created Successfully";
			header('Location:?do=viewparticipants');
		}
	

	}
	
	function viewParticipants()
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
			$pagesize = 7;
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
/*		echo $_POST['city']; exit;*/
		
		$obj1=new Bin_Query();
		if($_POST['moblie'] || $_POST['group'] || $_POST['city'] )
		{	
		$obj1_new=new Bin_Query();
	
		$sql1_new="SELECT * FROM participants_table"; 			
		$obj1_new->executeQuery($sql1_new);
		$rec=$obj1_new->records;
/*		print_r($rec); exit;*/
		for($i=0; $i<count($rec); $i++)
		{
			$gr=explode(',',$rec[$i]['group_name']);
/*			print_r($gr); exit;*/
			for($j=0; $j<count($gr); $j++)
			{
				if($gr[$j] == $_POST['group'])
				{
					$arr[]=$rec[$i]['participants_id'];

				}
			}

		}
// 	print_r($arr); exit;

			
		  $sql1.="SELECT * FROM participants_table  WHERE ("; 
			for($m=0; $m<count($arr); $m++)
			{
			$s=(count($arr)-1);
				if($s == $m)
				{
				$sql1.="participants_id='".$arr[$m]."') OR( ";
				}
				else
				{
				$sql1.="participants_id='".$arr[$m]."' OR ";
				}
	
			}
		
	
		
		$sql1.="mobile_num='".$_POST['moblie']."' OR city='".$_POST['city']."') ORDER BY participants_id";

/*	echo $sql1; exit;*/
 
		}
		else
		{
		$sql1="SELECT * FROM participants_table ORDER BY participants_id DESC"; 

		}

		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1_find=new Bin_Query();
			if($_POST['moblie'] || $_POST['group'] || $_POST['city'])
			{

				$obj1_new=new Bin_Query();
			
				$sql1_new="SELECT * FROM participants_table"; 			
				$obj1_new->executeQuery($sql1_new);
				$rec=$obj1_new->records;
		/*		print_r($rec); exit;*/
				for($i=0; $i<count($rec); $i++)
				{
					$gr=explode(',',$rec[$i]['group_name']);
		/*			print_r($gr); exit;*/
					for($j=0; $j<count($gr); $j++)
					{
						if($gr[$j] == $_POST['group'])
						{
							$arr1[]=$rec[$i]['participants_id'];
		
						}
					}
		
				}
		
					
				$sql_find.="SELECT * FROM participants_table  WHERE ("; 
					for($m=0; $m<count($arr); $m++)
					{
					$s=(count($arr)-1);
						if($s == $m)
						{
						$sql_find.="participants_id='".$arr1[$m]."') OR( ";
						}
						else
						{
						$sql_find.="participants_id='".$arr1[$m]."' OR ";
						}
			
					}
				
				
				$sql_find.="mobile_num='".$_POST['moblie']."' OR city='".$_POST['city']."') ORDER BY participants_id DESC LIMIT $start,$end";

		 

			}
				else
				{
				$sql_find="SELECT * FROM participants_table ORDER BY participants_id DESC"; 
		
				}
					$obj1_find->executeQuery($sql_find);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
	
			$obj1_find=new Bin_Query();


			if($_POST['moblie'] || $_POST['group'] || $_POST['city'])
			{	
				if(($_POST['group']) != '')
				{			
					$obj1_new=new Bin_Query();
				
					$sql1_new="SELECT * FROM participants_table"; 			
					$obj1_new->executeQuery($sql1_new);
					$rec=$obj1_new->records;
			/*		print_r($rec); exit;*/
					for($i=0; $i<count($rec); $i++)
					{
						$gr=explode(',',$rec[$i]['group_name']);
			/*			print_r($gr); exit;*/
						for($j=0; $j<count($gr); $j++)
						{
							if($gr[$j] == $_POST['group'])
							{
								$arr2[]=$rec[$i]['participants_id'];
			
							}
						}
			
					}
				}
					
				$sql_find.="SELECT * FROM participants_table  WHERE ("; 
					for($m=0; $m<count($arr2); $m++)
					{
					$s=(count($arr2)-1);
						if($s == $m)
						{
						$sql_find.="participants_id='".$arr2[$m]."') OR( ";
						}
						else
						{
						$sql_find.="participants_id='".$arr2[$m]."' OR ";
						}
			
					}
				
				
				$sql_find.="mobile_num='".$_POST['moblie']."' OR city='".$_POST['city']."') ORDER BY participants_id DESC LIMIT $start,$end";


			}
			else
			{
			$sql_find="SELECT * FROM participants_table ORDER BY participants_id DESC LIMIT $start,$end"; 
	
			}
			 
			$obj1_find->executeQuery($sql_find);
		}
		return Display_DParticipants::viewParticipants($obj1_find->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);
	}

	function partdicipantdetail()
	{
		$obj=new Bin_Query();
		$sql="SELECT * FROM participants_table WHERE participants_id = '".$_GET['id']."'"; 
		$obj->executeQuery($sql);
		return Display_DParticipants::partdicipantdetail($obj->records);

	}
	
	function modifyParticipants()
	{
		$mod_qry=new Bin_Query();
		$mod_sql="UPDATE participants_table SET fname='".$_REQUEST['up_fname']."',lname='".$_REQUEST['up_lname']."',gender='".$_REQUEST['up_gender']."',mobile_num='".$_REQUEST['up_mobile']."',city='".$_REQUEST['up_city']."',education='".$_REQUEST['up_education']."', note='".$_REQUEST['up_note']."',medical_details='".$_REQUEST['up_medical']."',messaging_frequency='".$_REQUEST['up_frequency']."',age='".$_REQUEST['up_age']."',email_id='".$_REQUEST['up_email']."',group_name='";
		for($i=0; $i<count($_REQUEST['up_group']); $i++)
		{
			$s=count($_REQUEST['up_group']) -1;
			if($i == $s)
			{
			$mod_sql.="".$_REQUEST['up_group'][$i]."";
			}
			else
			{		
			$mod_sql.="".$_REQUEST['up_group'][$i].",";
			}
		
		}
		$mod_sql.="' WHERE participants_id='".$_GET['part_id']."'";

		if($mod_qry->updateQuery($mod_sql))
		{
			$_SESSION['upuser_new']="Participant Details Updated Successfully";
			header('Location:?do=viewparticipants');

/*			header('Location:?do=editParticipants&id='.$_GET['part_id'].'');*/
		}	
		
	}
	
	function deleteParticipants()
	{
		$obj1=new Bin_Query();
		$sql1="SELECT fname FROM participants_table WHERE participants_id = '".$_GET['id']."'"; 
		$obj1->executeQuery($sql1);
		$fname=$obj1->records[0]['fname'];
		
		if(isset($_POST['delete']))
		{
		foreach($_POST['checkbox'] as $key=>$item)
		{		
		$obj= new Bin_Query();
		$sql="DELETE FROM participants_table WHERE participants_id='".$item."'";
		if($obj->updateQuery($sql))
		{
			$_SESSION['deletepart']="Participant Details Deleted Successfully";
			header('Location:?do=viewparticipants');
		}
		}
		}
		

		$qry=new Bin_Query();
		$sql="DELETE FROM participants_table WHERE participants_id='".$_GET['id']."'";
		if($qry->updateQuery($sql))
		{


			$con='Deleted a Participant '.$fname;

				Model_MParticipants::activityInfo($con);

			$_SESSION['deletepart']="Participant Details Deleted Successfully";
			header('Location:?do=viewparticipants');
		}
	}
	
	function viewParticipantDetails()
	{
		$part_qry=new Bin_Query();
		$part_sql="SELECT * FROM participants_table WHERE participants_id='".$_GET['id']."'";
		if($part_qry->executeQuery($part_sql))
		$records=$part_qry->records[0];
		return $records;
	}

	function activityInfo($con)
	{
		$admin_log_ip_used = $_SERVER['REMOTE_ADDR'];
		$current_time = date('y-m-d h:i:s');
		$obj=new Bin_Query();
		$sql="INSERT INTO admin_log_activity_table (admin_id,ip_address,admin_date_time,admin_desc) VALUES('".$_SESSION['admin']['id']."','".$admin_log_ip_used."','".$current_time."','".$con."')"; 
		if($obj->updateQuery($sql))
		{
			return true;
		}
		
	}
	
	function viewGroup()
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
			$pagesize = 5;
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
		$sql1="SELECT * FROM group_table ORDER BY group_id DESC"; 
		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1=new Bin_Query();
		 	$sql1="SELECT * FROM group_table ORDER BY group_id DESC"; 
			$obj1->executeQuery($sql1);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
	
			$obj1=new Bin_Query();
			 $sql1="SELECT * FROM group_table ORDER BY group_id DESC LIMIT $start,$end"; 
			$obj1->executeQuery($sql1);
		}
		
		return Display_DParticipants::viewGroup($obj1->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);

	}
	
	function editGroup()
	{
		$editgroup=new Bin_Query();
		$editgroupsql="SELECT * FROM group_table WHERE group_id='".$_GET['id']."'";
		$editgroup->executeQuery($editgroupsql);
		$record = $editgroup->records[0];
		return $record;
	}
	
	function editupdateGroup()
	{
		if($_POST['scope']==0)
		{
			$obj=new Bin_Query();
			$sql="UPDATE group_table SET group_name='".$_POST['name']."', group_scope='".$_POST['scope']."', group_decs='".$_POST['description']."' WHERE group_id='".$_GET['id']."'"; 
			if($obj->updateQuery($sql))
			{	
				$_SESSION['updategroup']="Group Update Successfully";
				header('Location:?do=viewgroup');
			}
		}
		else
		{
		$obj=new Bin_Query();
		$sql.="UPDATE group_table SET group_name='".$_POST['name']."', group_scope='".$_POST['scope']."', group_decs='".$_POST['description']."', local_city='".$_POST['gcity']."', local_dojfrom='".$_POST['dojfrom']."', local_dojto='".$_POST['dojto']."', local_age='".$_POST['up_age']."', local_educations='".$_POST['edu']."',select_local_group='"; 
		for($i=0; $i<count($_REQUEST['up_group']); $i++)
		{
			$s=count($_REQUEST['up_group']) -1;
			if($i == $s)
			{
			$sql.="".$_REQUEST['up_group'][$i]."";
			}
			else
			{
			$sql.="".$_REQUEST['up_group'][$i].",";
			}
		
		}
		$sql.="'WHERE group_id='".$_GET['id']."'";  
		if($obj->updateQuery($sql))
		{
			$_SESSION['updategroup']="Group Update Successfully";
			header('Location:?do=viewgroup');
		}
		}
		
	}
	
	function deleteGroup()
	{
		if(isset($_POST['delete']))
		{
		foreach($_POST['checkbox'] as $key=>$item)
		{		
		$obj= new Bin_Query();
		$sql="DELETE FROM group_table WHERE group_id='".$item."'";
		if($obj->updateQuery($sql))
		{
			$_SESSION['updategroup']="Group Deleted Successfully";
			header('Location:?do=viewgroup');
		}
		}
		}
		else
		{
			$obj=new Bin_Query();
			$sql="DELETE FROM group_table WHERE group_id = '".$_GET['id']."'";
			if($obj->updateQuery($sql))
			{
				$_SESSION['updategroup']="Group Deleted Successfully";
				header('Location:?do=viewgroup');
			}
		}
	}

	
}
?>