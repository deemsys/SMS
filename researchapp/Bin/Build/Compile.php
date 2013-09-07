<?php
/**
 * Compile
 *
 * This class is used to parse the XML files in WEB-CONFIG folder
 * 
 *
 * @package		Bin_Build
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------


class Bin_Build_Compile
{
	/**
	 * This function will read the web.xml file and return the XML object
	 *
	 * @return XML Object
	 */
	protected function readConfigFile()
	{		 			
		try
		{			
			if(!file_exists(ROOT_FOLDER."WEB-CONFIG/web.xml"))
			{
				include(ROOT_FOLDER.'Bin/Core/Exceptions.php');			
				$ertmp = 'File not found in the following path '.ROOT_FOLDER.'WEB-CONFIG/web.xml';
				throw new Bin_Core_Exceptions($ertmp, Bin_Core_Exceptions::FATAL);
			}
			else
				return @simplexml_load_file(ROOT_FOLDER."WEB-CONFIG/web.xml");			
		}
		catch(Bin_Core_Exceptions $e)
		{
			echo $e->getmessage();
			exit();
		}
	}
	
	/**
	 * This function will get XML object as an argument and read
	 * application setup details and convert it in to an array
	 *
	 * @param array $arr
	 * @return array
	 */
	protected function buildAppSetup($arr)
	{
		$tmp = array('do'=>(string) $arr->appconfig->urldo[0], 'action'=>(string) $arr->appconfig->urlaction[0]);
		if(isset($arr->appconfig->escapepost))
			$tmp['escapepost'] = (string) $arr->appconfig->escapepost[0];
		else
			$tmp['escapepost'] = 'Yes';
		
		if(isset($arr->appconfig->escapeget))
			$tmp['escapeget'] = (string) $arr->appconfig->escapeget[0];
		else
			$tmp['escapeget'] = 'Yes';
			
		if(isset($arr->appconfig->escapecookie))
			$tmp['escapecookie'] = (string) $arr->appconfig->escapecookie[0];
		else
			$tmp['escapecookie'] = 'No';
		
		if(isset($arr->appconfig->escapesession))
			$tmp['escapesession'] = (string) $arr->appconfig->escapesession[0];
		else
			$tmp['escapesession'] = 'No';
		
		return $tmp;
	}
	
	/**
	 * This function will get XML object as an argument and read
	 * system configuration XML details and convert it in to an array
	 * 
	 * @param array $arr
	 * @return array
	 */
	protected function buildSystemConfig($arr)
	{
		$cnt = count($arr->appconfig->systemconfig);
		for($i=0;$i<$cnt;$i++)
		{
			try
			{
				if(!file_exists(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->systemconfig[$i].".xml"))
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');			
					$ertmp = 'File not found in the following path '.ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->systemconfig[$i].".xml";
					throw new Bin_Core_Exceptions($ertmp, Bin_Core_Exceptions::FATAL);				
				}
				else
				{
					$resp[] = @simplexml_load_file(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->systemconfig[$i].".xml");			
					if(!isset($resp[count($resp)-1]->systemroot))
					{
						include(ROOT_FOLDER.'Bin/Core/Exceptions.php');			
						$ertmp = 'XML Parse Error. Please check your System Configuration file.';
						throw new Bin_Core_Exceptions($ertmp, Bin_Core_Exceptions::FATAL);				
					}
				}
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getmessage();
				exit();
			}
		}

		$systemroot = $resp[0]->systemroot;
		$cnt = count($systemroot);
		
		for($i=0;$i<$cnt;$i++)
		{
			
			$tmp = $systemroot[$i]->attributes();
			$currentroot = $tmp->name[0];
			
			$lbs = $systemroot[$i]->system;
			$lbscount = count($lbs);
			
			for($j=0;$j<$lbscount;$j++)
			{				
				$tmp = $lbs[$j]->attributes();				
				$str[(string) $tmp->id[0]] = $currentroot.'/'.$tmp->name[0].'.php';								
			}				
		}	
		return (array) $str;	
	}
	
	protected function buildLibraryConfig($arr)
	{
		
		$cnt = count($arr->appconfig->libraryconfig);
		for($i=0;$i<$cnt;$i++)
		{			
			try
			{
				if(!file_exists(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->libraryconfig[$i].".xml"))
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'File not Found in the following path '.	ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->libraryconfig[$i].".xml";
					throw new Bin_Core_Exceptions($ertmp, Bin_Core_Exceptions::FATAL);
				}	
				else
					$resp[] = @simplexml_load_file(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->libraryconfig[$i].".xml");						
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getMessage();
				exit();
			}
		}
		
		$dicroot = $arr->appconfig->libraryroot[0];
		$libraryroot = $resp[0]->libraryroot;
		$cnt = count($libraryroot);
		for($i=0;$i<$cnt;$i++)
		{
			
			$tmp = $libraryroot[$i]->attributes();
			$currentroot = $dicroot.'/'.$tmp->name[0];
			
			$lbs = $libraryroot[$i]->library;
			$lbscount = count($lbs);
			
			for($j=0;$j<$lbscount;$j++)
			{				
				$tmp = $lbs[$j]->attributes();				
				$str[(string) $tmp->id[0]] = $currentroot.'/'.$tmp->name[0].'.php';								
			}				
		}	
		
		return (array) $str;
		
	}
	
	protected function buildControllerConfig($arr)
	{	
		$fval = -1;
		for($i=0;$i<count($arr->appconfig->configs);$i++)
		{
			$tmp = $arr->appconfig->configs[$i]->attributes();
			if($tmp['for']==CURRENT_FOLDER)
				$fval = $i;
		}
			
		if($fval==-1)
			return false;
		
		for($i=0;$i<count($arr->appconfig->configs[$fval]->paramvalue);$i++)
		{
			try
			{
				if(!file_exists(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->configs[$fval]->paramvalue[$i].".xml"))
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'File not Found in the following path '.ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->configs[$fval]->paramvalue[$i].".xml".".xml";
					throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);			
				}
				else			
					$resp[] = @simplexml_load_file(ROOT_FOLDER."WEB-CONFIG/".$arr->appconfig->configs[$fval]->paramvalue[$i].".xml");						
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getMessage();
				exit();
			}
		}	
		$domapping =array();
		$glbalmapping = array();
		
		for($i=0;$i<count($resp);$i++)
		{
			$cnt = count($resp[$i]->domapping->do);
			for($j=0;$j<$cnt;$j++)
			{
				$tmp = $resp[$i]->domapping->do[$j]->attributes();
				if(isset($tmp['action']))
				{
					if(isset($tmp['loadlib']))
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0],'loadlib'=>(string)$tmp['loadlib']);				
					else
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0], 'loadlib'=>'L_ALL');
					
					if(isset($tmp['loadsys']))
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('loadsys'=>(string)$tmp['loadsys']));				
					else
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('loadsys'=>'S_ALL'));				
						
					if(isset($tmp['escapepost']))
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('escapepost'=>(string)$tmp['escapepost']));

					if(isset($tmp['escapeget']))
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('escapeget'=>(string)$tmp['escapeget']));
						
					if(isset($tmp['escapecookie']))
						$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('escapecookie'=>(string)$tmp['escapecookie']));

					//if(isset($tmp['escapesession']))
						//$domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]] = array_merge($domapping[(string)$tmp[name].':'.(string)$tmp['action'][0]], array('escapesession'=>(string)$tmp['escapesession']));
						
				}
				else 
				{
					if(isset($tmp['loadlib']))
						$domapping[(string)$tmp[name]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0],'loadlib'=>(string)$tmp['loadlib']);
					else
						$domapping[(string)$tmp[name]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0],'loadlib'=>'L_ALL');
						
					if(isset($tmp['loadsys']))
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('loadsys'=>(string)$tmp['loadsys']));				
					else
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('loadsys'=>'S_ALL'));	
						
					if(isset($tmp['escapepost']))
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('escapepost'=>(string)$tmp['escapepost']));

					if(isset($tmp['escapeget']))
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('escapeget'=>(string)$tmp['escapeget']));
						
					if(isset($tmp['escapecookie']))
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('escapecookie'=>(string)$tmp['escapecookie']));

					if(isset($tmp['escapesession']))
						$domapping[(string)$tmp[name]] = array_merge($domapping[(string)$tmp[name]], array('escapesession'=>(string)$tmp['escapesession']));
						
				}				
			}
			
			$cntt = count($resp[$i]->globalmapping->do);			
			for($j=0;$j<$cntt;$j++)
			{
				$tmp = $resp[$i]->globalmapping->do[$j]->attributes();
				if(isset($tmp['loadlib']))
					$globalmapping[(string)$tmp[name]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0],'loadlib'=>(string)$tmp['loadlib']);				
				else
					$globalmapping[(string)$tmp[name]] = array('controller'=>(string)$tmp['controller'][0],'function'=>(string)$tmp['function'][0],'loadlib'=>'L_ALL');
					
				if(isset($tmp['loadsys']))
					$globalmapping[(string)$tmp[name]] = array_merge($globalmapping[(string)$tmp[name]], array('loadsys'=>(string)$tmp['loadsys']));								
				else
					$globalmapping[(string)$tmp[name]] = array_merge($globalmapping[(string)$tmp[name]], array('loadsys'=>'S_ALL'));	
				
			}			
		}		
		return array("domapping"=>(array)$domapping, "globalmapping"=>(array)$globalmapping);
	}	
}


?>