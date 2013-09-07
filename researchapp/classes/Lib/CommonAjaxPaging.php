<?php

class Lib_CommonAjaxPaging
{
	
	var $output=array();
	var $prev;
	var $next;
	
	function Lib_CommonAjaxPaging($model,$par,$cssstyle,$div)
	{
		
		if($model='classic')
			$this->doClassicPaging($par,$cssstyle,$div);
	}
	
	function doClassicPaging($par = array(),$cssstyle,$div)
	{
// 	  print_r($par);exit;
//	   echo $cssstyle;exit;
		if(count($par)>0)
		{
			
			if(!isset($_GET['page']))
			{
				$start = 1;
				$end = ($par['length']>$par['totalpages'] ? $par['totalpages'] : $par['length']);
				$s = 0;
				for($i=$start;$i<=$end;$i++)
				{
					$tmp = $_SERVER['QUERY_STRING']."&page=".$i."&action=search";
					if($_GET['page'] == "" && $i==1)
						$this->output[++$s]= '<li class="page"><a >'.$i.'</a></li>';				
					else
						$this->output[++$s]= '<a href="javascript:ajaxpaging(\'?'.($tmp).'\',\''.$div.'\');void(0);" class="paging_unselect">'.$i.'</a>';				
				}
				if($par['totalpages']>$par['length'])
				{
					$tmp = $_SERVER['QUERY_STRING']."&page=".($start+1)."&action=search";
					$this->next = '<a href="javascript:ajaxpaging(\'?'.($tmp).'\',\''.$div.'\');void(0);"  class="paging_unselect">Next </a>';
				}
				return true;
			}
			else if (isset($_GET['page']))
			{
					
				$cpage = $_GET['page'];
				$mid = (int) ($par['length']/2);
				if($cpage > ($mid+1))
				{
					$start = ($cpage - $mid);
					$end = $start + $par['length']-1;
				}
				else 
				{
					$start = 1;
					$end = ($par['length']>$par['totalpages'] ? $par['totalpages'] : $par['length']);
				}
				$s=0;
				for($i=$start;$i<=$end;$i++)
				{
					$tmp = split('page',$_SERVER['QUERY_STRING']);
					$q = $tmp[0]."page=".$i."&action=search";
					$tmp = split('&',$tmp[1]);					
					$q .= (strlen(trim($tmp[1]) > 0) ? '&'.$tmp[1] : '');
					if($_GET['page']==$i)
						$this->output[++$s] = '<li class="page"><a >'.$i.'</a></li>';
					else
					{
						if($i<=$par['totalpages'])
						$this->output[++$s] = '<a href="javascript:ajaxpaging(\'?'.($q).'\',\''.$div.'\');void(0);" class="paging_unselect">'.$i.'</a>';				
					}
				}
				if ($_GET['page']<$par['totalpages'])
				{
					$tmp = split('page',$_SERVER['QUERY_STRING']);
					$q = $tmp[0]."page=".($_GET['page']+1)."&action=search";
					$tmp = split('&',$tmp[1]);					
					$q .= (strlen(trim($tmp[1]) > 0) ? '&'.$tmp[1] : '');
					$this->next = '<a href="javascript:ajaxpaging(\'?'.($q).'\',\''.$div.'\');void(0);" class="paging_unselect">Next</a>';
				}
				if($_GET['page']>1)
				{

					$tmp = split('page',$_SERVER['QUERY_STRING']);
					$q = $tmp[0]."page=".($_GET['page']-1)."&action=search";
					$tmp = split('&',$tmp[1]);					
					$q .= (strlen(trim($tmp[1]) > 0) ? '&'.$tmp[1] : '');
					$this->prev .= ' <a href="javascript:ajaxpaging(\'?'.($q).'\',\''.$div.'\');void(0);"  class="paging_unselect">Prev</a>';
				}
			}			
		}
	}
}



?>