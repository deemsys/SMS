<?php
// error_reporting(E_ALL);
class Display_DMydashboard
{
	

	function viewParticipants($record)
	{

		if(count($record)>0)
		{
		for($i=0;$i<count($record);$i++)
		{
		
			$output.='<tr class="row1" onmouseover="mouse_event(this,"row_hover");" onmouseout="mouse_event(this,"row1");">
                  <td valign="top" align="left"  width="10%"><a href="?do=partdicipantdetail&id='.$record[$i]['participants_id'].'">'.$record[$i]['fname'].'</a></td>
                  <td valign="top" align="left" width="15%">'.$record[$i]['mobile_num'].'</td>
                  <td valign="top" align="left" width="10%">'.$record[$i]['city'].'</td>
         	  <td valign="top" align="left" width="10%">'.$record[$i]['age'].'</td>
		  <td valign="top" align="left" width="15%">'.$record[$i]['age'].'</td>
		  <td valign="top" align="left" width="15%">'.$record[$i]['education'].'</td>
		  <td valign="top" align="left" width="15%">'.$record[$i]['date_of_join'].'</td>


 	                </tr>';
		}



		   $output.='<tr><td colspan="7">  <div class="extrabottom">
              <ul class="pagination">
                <li class="text"><input type="submit" name="view" value="View All" class="submit_btn"></li>';
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

	
}
?>