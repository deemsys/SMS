<?php
// error_reporting(E_ALL);
class Display_DBroadcast
{
	
	

	function streamName($rec,$err)
	{


			
			$output='<select name="stream" class="input_cmbbx2"  id="streem" ><option value="">Select Stream</option>';
			for($i=0;$i<count($rec);$i++)
			{
				
				$select = ($err['stream']==$rec[$i]['stream_id'])?"selected":"";

				$output.='<option value='.$rec[$i]['stream_id'].' '.$select.'>&nbsp;'.ucfirst($rec[$i]['stream_name']).'</option>';
				
				

			}
			$output.='</select>';


			return $output;		


	}

	function groupName($rec,$err)
	{


			
			$output='<select name="group" class="input_cmbbx2"  id="group" ><option value="">Select Group</option>';
			for($i=0;$i<count($rec);$i++)
			{
				
				$select = ($err['group']==$rec[$i]['group_id'])?"selected":"";

				$output.='<option value='.$rec[$i]['group_id'].' '.$select.'>&nbsp;'.ucfirst($rec[$i]['group_name']).'</option>';
				
				

			}
			$output.='</select>';


			return $output;		


	}





	function ageFun1($age,$Err)
	{
// echo $age;exit;
			if($age=='Below 12')
			$select='selected';
			elseif($age=='12-18 Years')
			$select='selected';
			elseif($age=='18- 21 Years')
			$select='selected';
			elseif($age=='21-24 Years')
			$select='selected';
			elseif($age=='24-35 Years')
			$select='selected';
			elseif($age=='35-50 Years')
			$select='selected';
			elseif($age=='50-60 Years')
			$select='selected';
			elseif($age=='Above 60')
			$select='selected';


		$output.='<select name="up_age" class="input_cmbbx1"  id="age" >
				<option value="Below 12" '.$select.'>Below 12</option>
				<option value="12-18 Years" '.$select.'>12-18 Years</option>
				<option value="18- 21 Years" '.$select.'>18- 21 Years</option>
				<option value="21-24 Years" '.$select.'>21-24 Years</option>
				<option value="24-35 Years" '.$select.'>24-35 Years</option>
				<option value="35-50 Years" '.$select.'>35-50 Years</option>
				<option value="50-60 Years" '.$select.'>50-60 Years</option>
				<option value="Above 60" '.$select.'>Above 60</option>';		
					
					
				$output.='</select>';	


		return $output;
	}

	function listGroup1($rec)
	{
			$qry=new Bin_Query();
			$sql="SELECT group_name FROM participants_table WHERE participants_id='".$_GET['id']."'";
			if($qry->executeQuery($sql))
			$group=$qry->records[0]['group_name'];
			$val=explode(',',$group);
			
			$output='<select name="up_group[]" id="" class="combo_box2" size="7" multiple="multiple">';
			for($i=0;$i<count($rec);$i++)
			{
				for($j=0;$j<count($val);$j++)
				{
				$select = ($val[$j]['group_name']==$rec[$i]['group_id'])?"selected":"";

				$output.='<option value='.$rec[$i]['group_id'].' '.$select.'>'.$rec[$i]['group_name'].'</option>';
				}
				

			}
			$output.='</select>';


			
			return $output;			

	}


	function viewParticipants($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{
// print_r($record); exit;


		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		
			$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");">
                  <td valign="top" align="left"  width="10%"><a href="?do=partdicipantdetail&id='.$record[$i]['participants_id'].'">'.$record[$i]['fname'].'</a></td>
                  <td valign="top" align="left" width="15%">'.$record[$i]['mobile_num'].'</td>
                  <td valign="top" align="left" width="10%">'.$record[$i]['city'].'</td>
         	  <td valign="top" align="left" width="15%">'.$record[$i]['age'].'</td>
		         	  <td valign="top" align="left" width="15%">'.$record[$i]['age'].'</td>


                   <td valign="top" align="left" width="25%"><a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="?do=editParticipants&id='.$record[$i]['participants_id'].'" style="padding-right:10px;">Edit</a>';
		if($record[$i]['status'] == 1)
		{
			$output.='<a href="?do=activeuser&userid='.$record[$i]['participants_id'].'&status='.$record[$i]['status'].'" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="?do=activeuser&userid='.$record[$i]['participants_id'].'&status='.$record[$i]['status'].'" style="padding-right:10px;">Approve</a>';
		}
		else
		{
			$output.='';
		} 
			$output.='<a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="?do=deleteparticipant&id='.$record[$i]['participants_id'].'" style="padding-right:10px;">Remove</a></td>
                </tr>';
		}



		   $output.='<tr><td colspan="7">  <div class="extrabottom">
              <ul class="pagination">
                <li class="text">'.$prev.'</li>';
		for($i=1;$i<=count($paging);$i++)
			{
				$output.='<li>'.$paging[$i].'</li>';
			}
			$output.= '<li class="text">'.$next.'</li>';
			$output.='</div></td></tr>';
		$output.='</table>

              

</td>
      </tr> ';

		}
		return $output;

	}

	function partdicipantdetail($rec)
	{


			$group_array=explode(',',$rec[0]['group_name']);

			for($i=0; $i<count($group_array); $i++)
			{
				$s=count($group_array)-1;
			$obj=new Bin_Query();
			$sql="SELECT group_name FROM group_table WHERE group_id = '".$group_array[$i]."'"; 
			$obj->executeQuery($sql);
				if($s == $i)
				{
				$gr_name.=$obj->records[0]['group_name'];
				}
				else
				{
				$gr_name.=$obj->records[0]['group_name'].',';
				}

			}
// echo $gr_name; exit;

		if($rec[0]['gender'] == '0')
		{
		$gen='Male';
		}
		if($rec[0]['gender'] == '1')
		{
		$gen='Female';
		}	
		if($rec[0]['gender'] == '2')
		{
		$gen='Transgender';
		}

			$output.='<tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> First Name </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['fname'].'</a></td>
                </tr>
              <tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Last Name </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['lname'].'</a></td>
                </tr>
		
		<tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Mobile Number </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['mobile_num'].'</a></td>
                </tr>
		<tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Email-Id </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['email_id'].'</a></td>
                </tr>
              <tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Gender </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$gen.'</a></td>
                </tr><tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> City </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['city'].'</a></td>
                </tr>
              <tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Education </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['education'].'</a></td>
                </tr><tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Note</td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['note'].'</a></td>
                </tr>
              <tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Medical Details </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['medical_details'].'</a></td>
                </tr><tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Messaging Frequency </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['messaging_frequency'].'</a></td>
                </tr>
              <tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Group Name </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$gr_name.'</a></td>
                </tr><tr class="row1">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Age</td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.$rec[0]['age'].'</a></td>
                </tr>
              <tr class="row2">
                  <td width="20%" valign="middle" align="center" class="input_txt"> Date Of Join </td>
                    <td width="10%" valign="middle" align="left" class="input_txt">  :</td>
                  <td width="70%" valign="top" align="left" class="input_txt"><a href="#">'.substr($rec[0]['date_of_join'],0,10).'</a></td>
                </tr>
           

		

		 ';
		return $output;

	}


	
	function viewReports($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{

		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		$obj1_find=new Bin_Query();
		$sql_find="SELECT stream_name FROM stream where stream_id='".$record[$i]['steam_id']."'"; 
		$obj1_find->executeQuery($sql_find);
		$str_name=$obj1_find->records[0]['stream_name'];
		
		$obj1=new Bin_Query();
		$sql="SELECT group_name,group_id FROM group_table where group_id='".$record[$i]['group_id']."'"; 
		$obj1->executeQuery($sql);
		$group_name=$obj1->records[0]['group_name'];
		$group_id=$obj1->records[0]['group_id'];	

		$obj1=new Bin_Query();
		$sql="SELECT group_name,group_id FROM group_table where group_id='".$record[$i]['group_id']."'"; 
		$obj1->executeQuery($sql);
		$group_name=$obj1->records[0]['group_name'];
		$group_id=$obj1->records[0]['group_id'];

		$obj1_new=new Bin_Query();
		$sql_new="SELECT group_name  FROM participants_table"; 
		$obj1_new->executeQuery($sql_new);
		$rec=$obj1_new->records;
		
		$con[$i]=0;
		for($j=0; $j<count($rec); $j++)
		{
			$ex_array=explode(',',$rec[$j]['group_name']);
			for($m=0; $m<count($ex_array); $m++)
			{
				if($ex_array[$m] == $record[$i]['group_id'])	
				{
					$con[$i]=$con[$i]+1;
				}
			}
		}
		$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");"><td valign="top" align="left" width="10%">'.$record[$i]['broad_id'].'</td><td valign="top" align="left" width="10%">'.ucfirst($str_name).'</td><td valign="top" align="left" width="10%">'.ucfirst($group_name).'</td><td valign="top" align="center" width="15%">'.$con[$i].'</td><td valign="top" align="left" width="15%">'.$record[$i]['frequency'].'</td><td valign="top" align="left" width="10%">'.substr($record[$i]['start_date'],0,10).'</td><td valign="top" align="left" width="10%">Scheduled</td><td valign="top" align="left" width="20%">1200 / 120000</td></tr>';		
		}
		$output.='<tr><td colspan="8">  <div class="extrabottom"><ul class="pagination"><li class="text">'.$prev.'</li>';
		for($i=1;$i<=count($paging);$i++)
		{
			$output.='<li>'.$paging[$i].'</li>';
		}
		$output.= '<li class="text">'.$next.'</li>';
		$output.='</div></td></tr>';
		}
		else
		{
		$output.='<tr class="row1">
                <td valign="center" align="center" height="100px"> <font color="#E25A00"><b>No Records Found</b></font> </td></tr>';	
		}
		return $output;
	}


	
}
?>
