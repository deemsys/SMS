<?php
// error_reporting(E_ALL);
class Model_MMydashboard
{	
	
	
	function viewParticipants()
	{

			$obj1_find=new Bin_Query();
		
			$sql_find="SELECT * FROM participants_table ORDER BY participants_id DESC LIMIT 0 , 7"; 
							 
			$obj1_find->executeQuery($sql_find);
		
		return Display_DMydashboard::viewParticipants($obj1_find->records);


	}

	


	
}
?>