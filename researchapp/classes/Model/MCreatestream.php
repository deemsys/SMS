<?php
// error_reporting(E_ALL);
class Model_MCreatestream
{

	function createId()
	{
		$obj1=new Bin_Query();
		$sql2="SELECT MAX(stream_id) as id FROM stream"; 
		$obj1->executeQuery($sql2);
		$rec = $obj1->records[0]['id']; 
		if($rec != '')
		{
			$rec1=$rec+1;
		}
		else
		{
			$rec1='1001';
		}
		
		return $rec1; 
	}


	function insertStream()
	{
		
		$query=new Bin_Query();
		 $sql="INSERT INTO stream(stream_id,admin_name ,stream_name,stream_description)VALUES('".$_POST['st_id']."','".$_SESSION['admin']['username']."','".$_POST['sname']."','".$_POST['sdes']."')"; 	
		$query->updateQuery($sql);
			$mess='';
		if(count($_REQUEST['message'])>0)
		{
			for($i=0;$i<count($_REQUEST['message']);$i++)
			{
			$s=$i+1;	
			$query1=new Bin_Query();
			$sql1="INSERT INTO message_stream(stream_id,stream_message,	msg_count)VALUES('".$_POST['st_id']."','".$_REQUEST['message'][$i]."','".$s."')"; 
				$query1->updateQuery($sql1);

			}

		}
			$_SESSION['stream']="Stream Added Successfully";
			header('Location:?do=viewstream');

		
	}
		
	function sMesssage($errval,$errmsg)
	{
	return Display_DCreatestream::sMesssage($errval,$errmsg);
	}
	

	function editMesssage($errval,$errmsg)
	{
	return Display_DCreatestream::editMesssage($errval,$errmsg);
	}
	
	function Viewstream()
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
		$sql1="SELECT a.*,b.*,COUNT(b.stream_id) FROM stream a, message_stream b WHERE a.stream_id=b.stream_id GROUP BY a.stream_id ORDER BY a.stream_id DESC";
		$obj1->executeQuery($sql1);
		$total = ceil($obj1->totrows/ $pagesize);
		if($obj1->totrows<=$pagesize)
		{
			$obj1=new Bin_Query();
			$sql1="SELECT a.*,b.*,COUNT(b.stream_id) FROM stream a, message_stream b WHERE a.stream_id=b.stream_id GROUP BY b.stream_id ORDER BY a.stream_id DESC"; 
			$obj1->executeQuery($sql1);
		}
		else
		{
			$tmp = new Lib_CommonAjaxPaging('classic',array('totalpages'=>$total, 'length'=>10),'pagination','user_ajax');
			$this->data['paging'] = $tmp->output;
			$this->data['prev'] =$tmp->prev;
			$this->data['next'] = $tmp->next;
			$obj1=new Bin_Query();
			$sql1="SELECT a.*,b.*,COUNT(b.stream_id) FROM stream a, message_stream b WHERE a.stream_id=b.stream_id GROUP BY b.stream_id ORDER BY a.stream_id DESC LIMIT $start,$end"; 
			$obj1->executeQuery($sql1);
		}
		
		return Display_DCreatestream::Viewstream($obj1->records,1,$this->data['paging'],$this->data['prev'],$this->data['next'],$start,$total,$pagesize);
		
	}
	
	function editStream($msg)
	{
// 		echo "kk"; exit;
		$sid=$_GET['streamid'];
		$edit_stream=new Bin_Query();
		$edit_sql="SELECT a.*,b.* FROM stream a, message_stream b WHERE a.stream_id='".$sid."' AND b.stream_id='".$sid."' ORDER BY message_id ASC";
		if($edit_stream->executeQuery($edit_sql))
		$records=$edit_stream->records;
		return Display_DCreatestream::editStream($records,$msg);
	}
	
	function updateStream()
	{
		$upstream=new Bin_Query();
		$upstreamsql="UPDATE stream SET stream_name='".$_POST['sname']."',stream_description='".$_POST['sdes']."' WHERE stream_id='".$_GET['streamid']."'";
		$upstream->updateQuery($upstreamsql);
		
		if(count($_REQUEST['message'])>0)
		{
			$delete = mysql_query("DELETE FROM message_stream WHERE stream_id='".$_GET['streamid']."'");
			for($i=0;$i<count($_REQUEST['message']);$i++)
			{
							$s=$i+1;	
	
			$query=new Bin_Query();
			$sql="INSERT INTO message_stream(stream_id,stream_message,	msg_count)VALUES('".$_GET['streamid']."','".$_REQUEST['message'][$i]."','".$s."')"; 
			$query->updateQuery($sql);
			}
			$_SESSION['upstream']="Stream Updated Successfully";
			header('Location:?do=viewstream');
		
		}
		
	}
	
	function deleteStream()
	{
		if(isset($_POST['delete']))
		{
		foreach($_POST['checkbox'] as $key=>$item)
		{		
		$obj= new Bin_Query();
		$sql="DELETE a.*,b.* FROM stream a, message_stream b WHERE a.stream_id='".$item."' AND b.stream_id='".$item."'";
		if($obj->updateQuery($sql))
		{
			$_SESSION['delstream']="Stream Deleted Successfully";
			header('Location:?do=viewstream');
		}
		}
		}
		$deletestream=new Bin_Query();
		$deletestreamsql="DELETE a.*,b.* FROM stream a, message_stream b WHERE a.stream_id='".$_GET['streamid']."' AND b.stream_id='".$_GET['streamid']."'";
		if($deletestream->updateQuery($deletestreamsql))
		{
			$_SESSION['delstream']="Stream Deleted Successfully";
			header('Location:?do=viewstream');
		}
	}

	function showStream()
	{
// 		echo "kk"; exit;
		$sid=$_GET['streamid'];
		$edit_stream=new Bin_Query();
		$edit_sql="SELECT a.*,b.* FROM stream a, message_stream b WHERE a.stream_id='".$sid."' AND b.stream_id='".$sid."' ORDER BY message_id ASC";
		if($edit_stream->executeQuery($edit_sql))
		$records=$edit_stream->records;
		return Display_DCreatestream::showStream($records);
	}

}
?>