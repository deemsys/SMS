<?php

class Bin_Template
{
	function createTemplate($file,$data='')
	{
		$smarty = new Smarty();
		if(is_array($data))
		{	
			foreach($data as $key=>$item)
				$smarty->assign($key,$item);
		}
		$smarty->display($file);
	}


}


?>
