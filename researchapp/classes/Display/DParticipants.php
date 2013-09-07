<?php
// error_reporting(E_ALL);
class Display_DParticipants
{
	
	function ageFun($err)
	{

// print_r($err)

			if($err['up_age'] != '')
			{
				  $age=$err['up_age']; 
			}
			else
			{
				$age=$_SESSION['up_age'];
			}

			if($age=='Below 12')
			$select1='selected';
			elseif($age=='12-18 Years')
			$select2='selected';
			elseif($age=='18- 21 Years')
			$select3='selected';
			elseif($age=='21-24 Years')
			$select4='selected';
			elseif($age=='24-35 Years')
			$select5='selected';
			elseif($age=='35-50 Years')
			$select6='selected';
			elseif($age=='50-60 Years')
			$select7='selected';
			elseif($age=='Above 60')
			$select8='selected';
		$output.='<select name="up_age" class="input_cmbbx1"  id="age" >
				<option value="Below 12" '.$select1.'>Below 12</option>
				<option value="12-18 Years" '.$select2.'>12-18 Years</option>
				<option value="18- 21 Years" '.$select3.'>18- 21 Years</option>
				<option value="21-24 Years" '.$select4.'>21-24 Years</option>
				<option value="24-35 Years" '.$select5.'>24-35 Years</option>
				<option value="35-50 Years" '.$select6.'>35-50 Years</option>
				<option value="50-60 Years" '.$select7.'>50-60 Years</option>
				<option value="Above 60" '.$select8.'>Above 60</option>';		
				$output.='</select>';	
		return $output;
	}

	function listGroup($rec,$err)
	{
		$output='<select name="group[]" id="group" '.$select.' class="combo_box2" size="7" multiple="multiple" >';
		for($i=0;$i<count($rec);$i++)
		{
			if(isset($err['group']))
			{
				foreach($err['group'] AS $k => $v)
				{
				$selcountry = ($v==$rec[$i]['group_id']) ? 'selected' : '';/* print_r($selcountry);*/ 
				}
			}
			$output.='<option id="" value='.$rec[$i]['group_id'].' '.$selcountry.' >&nbsp;'.ucfirst($rec[$i]['group_name']).'</option>';
		}
		$output.='</select>';/* print_r($output);*/
		return $output;
	}

	function listGroup2($rec)
	{
			$qry=new Bin_Query();
			$sql="SELECT group_name FROM participants_table WHERE participants_id='".$_GET['id']."'";
			if($qry->executeQuery($sql))
			$group=$qry->records[0]['group_name'];
			$val=explode(',',$group);
			
			$output='<select name="group" class="input_cmbbx2"  id="group" ><option value="">Select Group</option>';
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

	function listGroup1($rec,$val)
	{
			$qry=new Bin_Query();
			$sql="SELECT group_name FROM participants_table WHERE participants_id='".$_GET['id']."'";
			if($qry->executeQuery($sql))
			$group=$qry->records[0]['group_name'];
			$val=explode(',',$group);
			
			$output='<select name="up_group[]" id="" class="combo_box2" size="7" multiple="multiple">';
			
			for($i=0;$i<count($rec);$i++)
			{
				foreach($val AS $v => $k )
				{
				$select = ($k==$rec[$i]['group_id'])?"selected":"";
				
				}
				$output.='<option value='.$rec[$i]['group_id'].' '.$select.'>'.$rec[$i]['group_name'].'</option>';
			
			}
			$output.='</select>';


			
			return $output;			

	}

	function viewParticipants($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{
		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");"><td valign="top" align="left" width="5%"><input name="checkbox[]" id="checkbox[]" type="checkbox" value='.$record[$i]['participants_id'].' ></td>
                  <td valign="top" align="left"  width="10%"><a href="?do=partdicipantdetail&id='.$record[$i]['participants_id'].'">'.$record[$i]['fname'].'</a></td>
                  <td valign="top" align="left" width="15%">'.$record[$i]['mobile_num'].'</td>
                  <td valign="top" align="left" width="10%">'.$record[$i]['city'].'</td>
         	  <td valign="top" align="left" width="10%">'.$record[$i]['age'].'</td>
		         	  <td valign="top" align="left" width="15%">'.$record[$i]['age'].'</td><td valign="top" align="left" width="25%">';
			if($_SESSION['prive'][5]!='')
			{
			$output.='<a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="?do=editParticipants&id='.$record[$i]['participants_id'].'" style="padding-right:10px;">Edit</a>';
			}
		
		if($record[$i]['status'] == 1)
		{
			$output.='<a href="?do=activeuser&userid='.$record[$i]['participants_id'].'&status='.$record[$i]['status'].'" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="?do=activeuser&userid='.$record[$i]['participants_id'].'&status='.$record[$i]['status'].'" style="padding-right:10px;">Approve</a>';
		}
		else
		{
			$output.='';
		} 
			if($_SESSION['prive'][6]!='')
			{
			$output.='<a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;" onclick="confirmation(\''.$record[$i]['participants_id'].'\')">Remove</a></td>
                </tr>';
			}
			
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

		else
		{

		
			$output.='<tr class="row1">
                  <td valign="center" align="center" height="100px"> <font color="#E25A00"><b>No Records Found</b></font> </td></tr>';	
		


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
                  <td width="15%" valign="middle" align="left" > First Name </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['fname'].'</td>
                </tr>
              <tr class="row1">
                  <td width="15%" valign="middle" align="left" > Last Name </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['lname'].'</td>
                </tr>
		
		<tr class="row2">
                  <td width="15%" valign="middle" align="left" > Mobile Number </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['mobile_num'].'</td>
                </tr>
		<tr class="row1">
                  <td width="15%" valign="middle" align="left" > Email-Id </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['email_id'].'</td>
                </tr>
              <tr class="row2">
                  <td width="15%" valign="middle" align="left" > Gender </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$gen.'</td>
                </tr><tr class="row1">
                  <td width="15%" valign="middle" align="left" > City </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['city'].'</td>
                </tr>
              <tr class="row2">
                  <td width="15%" valign="middle" align="left" > Education </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['education'].'</td>
                </tr><tr class="row1">
                  <td width="15%" valign="middle" align="left" > Note</td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['note'].'</td>
                </tr>
              <tr class="row2">
                  <td width="15%" valign="middle" align="left" > Medical Details </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['medical_details'].'</td>
                </tr><tr class="row1">
                  <td width="15%" valign="middle" align="left" > Messaging Frequency </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['messaging_frequency'].'</td>
                </tr>
              <tr class="row2">
                  <td width="15%" valign="middle" align="left" > Group Name </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$gr_name.'</td>
                </tr><tr class="row1">
                  <td width="15%" valign="middle" align="left" > Age</td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.$rec[0]['age'].'</td>
                </tr>
              <tr class="row2">
                  <td width="15%" valign="middle" align="left" > Date Of Join </td>
                    <td width="1%" valign="middle" align="left" >  :</td>
                  <td width="84%" valign="top" align="left" >'.substr($rec[0]['date_of_join'],0,10).'</td>
                </tr>';
		return $output;

	}
	
	
	function viewGroup($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{


		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		
			$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");"><td valign="top" align="left" width="5%"><input name="checkbox[]" id="checkbox[]" type="checkbox" value='.$record[$i]['group_id'].' ></td>
                  <td valign="top" align="left"  width="10%">'.$record[$i]['group_name'].'</td>
                  <td valign="top" align="left" width="15%">'.$record[$i]['group_decs'].'</td>
                  <td valign="top" align="left" width="10%">'.$record[$i]['local_dojfrom'].'</td>
         	  <td valign="top" align="left" width="10%">'.$record[$i]['local_dojto'].'</td>
		         	  <td valign="top" align="left" width="15%">'.$record[$i]['local_educations'].'</td><td valign="top" align="left" width="25%">';
			
// 			$output.='<a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="?do=editgroup&id='.$record[$i]['group_id'].'" style="padding-right:10px;">Edit</a>';
			
		
		
// 			$output.='<a href="?do=activeuser&userid='.$record[$i]['group_id'].'&status='.$record[$i]['status'].'" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="?do=activeuser&userid='.$record[$i]['group_id'].'&status='.$record[$i]['status'].'" style="padding-right:10px;">Approve</a>';
			$output.='';
		 
			
			$output.='<a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;" onclick="confirmation(\''.$record[$i]['group_id'].'\')">Remove</a></td>
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
		else
		{
			$output.='<tr class="row1">
                  <td valign="center" align="center" height="100px"> <font color="#E25A00"><b>No Records Found</b></font> </td></tr>';	
		}
		return $output;
	}
	
	
	
}
?>