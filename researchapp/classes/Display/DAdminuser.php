<?php
// error_reporting(E_ALL);
class Display_DAdminuser
{
	
	function viewAdminuser($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{
	if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");"><td valign="top" align="left" width="5%"><input name="checkbox[]" id="checkbox[]" type="checkbox" value='.$record[$i]['admin_id'].' ></td>
                  <td valign="top" align="left" width="16%"><a href="?do=userdetail&userid='.$record[$i]['admin_id'].'">'.ucfirst($record[$i]['admin_username']).'</a></td>
                  <td valign="top" align="left" width="20%">'.$record[$i]['admin_email'].'</td>
                  <td valign="top" align="left" width="10%">'.$record[$i]['admin_mobile'].'</td>
                  <td valign="top" align="left" width="25%">'.ucfirst($record[$i]['admin_address']).'</td>
                  <td valign="top" align="left" width="24%">';
			
		if($_SESSION['prive'][8]!='')
		{
			$output.='<a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="?do=edituser&userid='.$record[$i]['admin_id'].'" style="padding-right:10px;">Edit</a>';
		}
		
		if(($_SESSION['prive'][8]!='') || ($_SESSION['prive'][9]!=''))
		{
			if($record[$i]['status'] == 1)
			{
			$output.='<a href="?do=activeuser&userid='.$record[$i]['admin_id'].'&status='.$record[$i]['status'].'" title=""><img src="images/icons/icon_approve.png" alt="Approve" /></a><a href="#"  style="padding-right:25px;" onclick="myActive(\''.$record[$i]['admin_id'].'\',\''.$record[$i]['status'].'\')">Approve</a>';
			}
			else
			{
			$output.='<a href="?do=activeuser&userid='.$record[$i]['admin_id'].'&status='.$record[$i]['status'].'" title=""><img src="images/icons/icon_unapprove.png" alt="Unapprove" /></a><a href="#" style="padding-right:10px;" onclick="myActive(\''.$record[$i]['admin_id'].'\',\''.$record[$i]['status'].'\')">Unapprove</a>';
			} 
		}	
		
			if($_SESSION['prive'][9]!='')
			{
			$output.='<a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;" onclick="myFunction('.$record[$i]['admin_id'].')">Remove</a></td>
                </tr>';
			}
			
		}
		   $output.='<tr><td colspan="6">  <div class="extrabottom"><ul class="pagination"><li class="text">'.$prev.'</li>';
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
	
	function userDetail($rec)
	{
		$output.='<tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"> Name :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">'.ucfirst($rec[0]['admin_username']).'</td>
                </tr>
                <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"> E-mail :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">'.$rec[0]['admin_email'].'</td>
                </tr>
		<tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"> Mobile :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">'.$rec[0]['admin_mobile'].'</td>
                </tr><tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"> Address :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">'.ucfirst($rec[0]['admin_address']).'</td>
                ';
		return $output;
	}
 
	function editUser($rec,$errmsg)
	{
		$output.='<tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Name :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="name"  class="input_txtbx" id="inp_id3"  value="'.$rec[0]['admin_username'].'" /></br><span class="err">'.$errmsg['name'].'</span></td>
                </tr>
                
		<tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> E-mail :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="email" class="input_txtbx" id="inp_id"  value="'.$rec[0]['admin_email'].'" /></br><span class="err">'.$errmsg['email'].'</span></td>
                </tr>
		<tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Mobile :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="mobile" class="input_txtbx" id="inp_id"  value="'.$rec[0]['admin_mobile'].'" /></br><span class="err">'.$errmsg['mobile'].'</span></td>
                </tr>
		<tr class="row1">
                  <td align="right" valign="middle" class="input_txt" width="30%"><span class="err">*</span> Address :</td>
                  <td align="left" valign="top" class="input_txt" width="70%"><textarea  id="inp_id5" cols="" rows="5" name="address" class="input_txtarea">'.$rec[0]['admin_address'].'</textarea></br><span class="err">'.$errmsg['address'].'</span></td>
                </tr><tr class="row2">
                  <td valign="top" align="right" class="input_txt" width="30%"> Privileges :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">';
$prev=explode(",",$rec[0]['previlages']);



$output.='<table cellpadding="0" cellspacing="0" border="0" width="100%">
<tr class="row3"><td><B> Stream </B> </td>';
if($prev[0]!='')
{
$output.='<td><input type="checkbox"  value="addstream" name="addstream" checked="checked"> Add </td>';
}
else
{
$output.='<td><input type="checkbox"  value="addstream" name="addstream"> Add </td>';	
}
if($prev[1]!='')
{
$output.='<td><input type="checkbox"  value="editstream" name="editstream" checked="checked"> Edit   </td>';
}
else
{
$output.='<td><input type="checkbox"  value="editstream" name="editstream" > Edit  </td>';
}
if($prev[2]!='')
{
$output.='<td><input type="checkbox"  value="deletestream" name="deletestream" checked="checked"> Delete </td>';
}
else
{
$output.='<td><input type="checkbox"  value="deletestream" name="deletestream" > Delete </td>';
}
if($prev[3]!='')
{
$output.='<td><input type="checkbox"  value="broadcaststream" name="broadcaststream" checked="checked"> Broadcast </td>';
}
else
{
$output.='<td><input type="checkbox"  value="broadcaststream" name="broadcaststream" > Broadcast </td>';
}
$output.='</tr>


<tr class="row3"><td><B> Participant </B> </td>';
if($prev[4]!='')
{
$output.='<td><input type="checkbox"  value="addparticipant" name="addparticipant" checked="checked"> Add </td>';
}
else
{
$output.='<td><input type="checkbox"  value="addparticipant" name="addparticipant"> Add  </td>';
}
if($prev[5]!='')
{
$output.='<td><input type="checkbox"  value="editparticipant" name="editparticipant" checked="checked"> Edit</td>';
}
else
{
$output.='<td><input type="checkbox"  value="editparticipant" name="editparticipant"> Edit </td>';
}
if($prev[6]!='')
{
$output.='<td colspan="2"><input type="checkbox"  value="deleteparticipant" name="deleteparticipant" checked="checked"> Delete </td> ';
}
else
{
$output.='<td colspan="2"><input type="checkbox"  value="deleteparticipant" name="deleteparticipant"> Delete</td>';
}

$output.='</tr>

<tr class="row3"><td><B> Admin user </B> </td>';
if($prev[7]!='')
{
$output.='<td ><input type="checkbox"  value="addadminuser" name="addadminuser" checked="checked"> Add </td>';
}
else
{
$output.='<td ><input type="checkbox"  value="addadminuser" name="addadminuser"> Add </td>';
}

if($prev[8]!='')
{
$output.='<td ><input type="checkbox"  value="edituser" name="edituser" checked="checked"> Edit  </td>';
}
else
{
$output.='<td ><input type="checkbox"  value="edituser" name="edituser"> Edit </td>';
}

if($prev[9]!='')
{
$output.='<td colspan="2"><input type="checkbox"  value="deleteuser" name="deleteuser" checked="checked">  Delete </td>';
}
else
{
$output.='<td colspan="2"><input type="checkbox"  value="deleteuser" name="deleteuser">  Delete </td>';
}

$output.='</tr>
<tr class="row3"><td><B> Settings </B> </td>';
if($prev[10]!='')
{
$output.='<td colspan="2"><input type="checkbox"  value="modifysettings" name="modifysettings" checked="checked"> Modify Settings </td>';
}
else
{
$output.='<td colspan="2"><input type="checkbox"  value="modifysettings" name="modifysettings"> Modify Settings </td>';
}
if($prev[11]!='')
{
$output.='<td colspan="2"><input type="checkbox"  value="mailtemplate" name="mailtemplate" checked="checked"> Mail Template </td>';
}
else
{
$output.='<td colspan="2"><input type="checkbox"  value="mailtemplate" name="mailtemplate"> Mail Template </td>';
}
 
$output.='</tr></table>';
$output.='</td>
                </tr>';
		return $output;
	} 
	
	function activityOfAdmin($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{

		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		
		$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");">
                  <td valign="top" align="center" width="15%">'.$record[$i]['admin_date_time'].'</td>
                  <td valign="top" align="left" width="15%">'.$record[$i]['ip_address'].'</td>
                  <td valign="top" align="left" width="70%">'.$record[$i]['admin_desc'].'.</td>
                </tr>';
		}



		   $output.='<tr><td colspan="6">  <div class="extrabottom">
              <ul class="pagination">
                <li class="text">'.$prev.'</li>';
		for($i=1;$i<=count($paging);$i++)
			{
				$output.='<li >'.$paging[$i].'</li>';
			}
			$output.= '<li class="text">'.$next.'</li>';
			$output.='</div></td></tr>';
		$output.='</table>

              

</td>
      </tr> ';
		
		}
 		
		
		
		return $output;

	}
}
?>