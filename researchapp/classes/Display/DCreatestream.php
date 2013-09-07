<?php
class Display_DCreatestream
{
	function sMesssage($errval,$errmsg)
	{


		for($i=1; $i<count($errval['message']); $i++)
		{
			$k=$i+1;
		$output.='<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Message '.$k.' :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea class="input_txtarea" name="message[]" rows="5" cols="" id="inp_id5" />'.$errval['message'][$i].'</textarea></br><span class="err"><AJDF:output>'.$errmsg['message'.$i.''].'</AJDF:output></span></td>
                </tr></table>';

		}

                return $output;
	}
	
	
	function editMesssage($errval,$errmsg)
	{


		for($i=1; $i<count($errval['message']); $i++)
		{
			$k=$i+1;
		$output.='<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Message '.$k.' :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea class="input_txtarea" name="message[]" rows="5" cols="" id="inp_id5" />'.$errval['message'][$i].'</textarea></br><span class="err"><AJDF:output>'.$errmsg['message'.$i.''].'</AJDF:output></span></td>
                </tr></table>';
		}

		return $output;
	}
	



	function Viewstream($record,$flag,$paging,$prev,$next,$start,$total,$pagesize)
	{
		if(count($record)>0)
		{
			for($i=0;$i<count($record);$i++)
			{
			$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");" ><td valign="top" align="left" width="5%"><input name="checkbox[]" id="checkbox[]" type="checkbox" value='.$record[$i]['stream_id'].' ></td><td valign="top" align="left" width="10%"><a href="?do=showstream&streamid='.$record[$i]['stream_id'].'">'.$record[$i]['stream_id'].'</a></td>
<td valign="top" align="left" width="15%">'.ucfirst($record[$i]['stream_name']).'</td>
<td valign="top" align="left" width="15%">'.substr(ucfirst($record[$i]['stream_description']),0,35).'.....</td>
<td valign="top" align="center" width="15%">'.$record[$i]['COUNT(b.stream_id)'].'</td>
<td valign="top" align="left" width="15%">'.ucfirst($record[$i]['admin_name']).'</td>
<td valign="top" align="center" width="25%">';
			if($_SESSION['prive'][1]!='')
			{
				$output.='<a href="#" title="" ><img src="images/icons/icon_edit.png" alt="Edit" /></a><a href="?do=editstream&streamid='.$record[$i]['stream_id'].'" style="padding-right:10px;">Edit</a>';
			}
			if($_SESSION['prive'][2]!='')
			{
			$output.='<a href="#" title=""><img src="images/icons/icon_delete.png" alt="Delete" /></a><a href="#" style="padding-right:10px;" onclick=streamdelete('.$record[$i]['stream_id'].') />Remove</a></td></tr>';
			}
			}

			$output.='<tr><td colspan="7"><div class="extrabottom"><ul class="pagination"><li class="text">'.$prev.'</li>';
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
	
	function editStream($record,$msg)
	{
		$output.=' <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="200" width="30%">Stream Id :</td>
                  <td valign="top" align="left" class="input_txt" width="70%">'.$record[0]['stream_id'].'</td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Stream Name :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><input type="text" name="sname" class="input_txtbx" id="inp_id3"  value="'.$record[0]['stream_name'].'"/></br> <span class="err">'.$msg['sname'].'</span></td>
                </tr>
                 <tr class="row1">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Description :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea name="sdes" class="input_txtarea"  rows="5" cols="" id="inp_id5"  />'.$record[0]['stream_description'].'</textarea></br><span class="err">'.$msg['sdes'].'</span></td>
                </tr>';	
		for($i=0;$i<count($record);$i++)
		{
			$j=$i+1;
					
		$output.='<tr class="row2">
                  <td valign="middle" align="right" class="input_txt" width="30%"><span class="err">*</span> Message '.$j.' :</td>
                  <td valign="top" align="left" class="input_txt" width="70%"><textarea class="input_txtarea" name="message[]" rows="5" cols="" id="inp_id5" />'.$record[$i]['stream_message'].'</textarea> </br><span class="err">'.$msg[$i]['message'].'</span></td>
                </tr>';
		}
                $output.='';
		return $output;
	}
	
	function showStream($record)
	{
		$output.=' <tr class="row1">
                  <td valign="middle" align="left" class="input_txt" width="200" width="15%">Stream Id :</td>
                  <td valign="top" align="left" class="input_txt" width="85%">'.$record[0]['stream_id'].'</td>
                </tr>
                <tr class="row2">
                  <td valign="middle" align="left" class="input_txt" width="15%"> Stream Name :</td>
                  <td valign="top" align="left" class="input_txt" width="85%">'.$record[0]['stream_name'].'</td>
                </tr>
                 <tr class="row1">
                  <td valign="middle" align="left" class="input_txt" width="15%"> Description :</td>
                  <td valign="top" align="left" class="input_txt" width="85%">'.$record[0]['stream_description'].'</td>
                </tr>';
		for($i=0;$i<count($record);$i++)
		{
				if($i%2!=0)
				{
					$class='row1';
				}
				else
				{
					$class='row2';
				}
		$j=$i+1;	
		$output.='<tr class="'.$class.'">
                  <td valign="middle" align="left" class="input_txt" width="15%"> Message '.$j.' :</td>
                  <td valign="top" align="left" class="input_txt" width="85%">'.$record[$i]['stream_message'].'</td>
                </tr>';
		}
                $output.='';
		return $output;
	}
}
?> 