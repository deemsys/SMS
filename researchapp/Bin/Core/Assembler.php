<?php
/**
 * Assembler
 *
 * This class will read the dll file regarding to the current
 * root folder and invoke controllers based on the querytstring
 *
 * @package		Bin_Core
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------

class Bin_Core_Assembler
{
	
	/**
	 * String variable where we store the querystring value
	 *
	 * @var String
	 */
	private $do;

	/**
	 * Constructs a Bin_Core_Assembler object with given parameters
	 * it will read the dll.php file and invoke the controller function
	 * based on the query string
	 *
	 * @return Bin_Core_Assembler
	 */
	public function Bin_Core_Assembler()
	{
		include(ROOT_FOLDER.'Built/'.CURRENT_FOLDER."/Dll.php");	

		if(isset($_GET[$appsetup['action']]) && isset($_GET[$appsetup['action']]{1}))
			$this->do = trim($_GET[$appsetup['do']]).':'.trim($_GET[$appsetup['action']]);
		else
			$this->do = trim($_GET[$appsetup['do']]);

		if(array_key_exists($this->do,$domapping))
		{
			if($domapping[$this->do]['loadsys']==='S_ALL')
				$this->loadSystemFiles($system);	
			else if(strstr($domapping[$this->do]['loadsys'],','))			
				$this->loadSystemFiles($system,split(',',$domapping[$this->do]['loadsys']));				
			
			if($domapping[$this->do]['loadlib']==='L_ALL')
				$this->loadLibrayFiles($libraries);				
			else if(strstr($domapping[$this->do]['loadlib'],','))
				$this->loadLibrayFiles($libraries,split(',',$domapping[$this->do]['loadlib']));
		}
		else
		{
			if(array_key_exists($this->do,$globalmapping))
			{
				if($globalmapping[$this->do]['loadsys']==='S_ALL')
					$this->loadSystemFiles($system);	
				else if(strstr($globalmapping[$this->do]['loadsys'],','))			
					$this->loadSystemFiles($system,split(',',$globalmapping[$this->do]['loadsys']));		
					
				if($globalmapping[$this->do]['loadlib']==='L_ALL')
					$this->loadLibrayFiles($libraries);	
				else if(strstr($globalmapping[$this->do]['loadlib'],','))			
					$this->loadLibrayFiles($libraries,split(',',$globalmapping[$this->do]['loadlib']));	
			}
			else if(array_key_exists('invalidrequest',$globalmapping))
			{
				if($globalmapping['invalidrequest']['loadsys']==='S_ALL')
					$this->loadSystemFiles($system);	
				else if(strstr($globalmapping['invalidrequest']['loadsys'],','))			
					$this->loadSystemFiles($system,split(',',$globalmapping['invalidrequest']['loadsys']));		
					
				if($globalmapping['invalidrequest']['loadlib']==='L_ALL')
					$this->loadLibrayFiles($libraries);	
				else if(strstr($globalmapping['invalidrequest']['loadlib'],','))			
					$this->loadLibrayFiles($libraries,split(',',$globalmapping['invalidrequest']['loadlib']));				
			}
			else
			{
				try
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'No Controller Specified, invalid configuration file';
					throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
				}
				catch(Bin_Core_Exceptions $e)
				{
					echo $e->getMessage();
					exit();
				}			
			}			
		}
		$this->loadControllerFiles($domapping, $globalmapping, $appsetup);
	}
	
	/**
	 * This function will include system files which are specified in XML file
	 * if ids are passed as an array only that particular system files will be included
	 * 
	 * @param array $system
	 * @param mixed $ids
	 */
	
	private function loadSystemFiles($system, $ids='')
	{
		if(is_array($ids) && strlen(trim($ids[0])) > 0)
		{
			foreach($ids as $key=>$item)
			{
				try
				{
					if(!file_exists(ROOT_FOLDER.$system[$item]))
					{
						include('Bin/Core/Exceptions.php');
						$ertmp = 'File Not Found in the following path '.ROOT_FOLDER.$system[$item];
						throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
					}
					else
						include(ROOT_FOLDER.$system[$item]);							
				}
				catch(Bin_Core_Exceptions $e)
				{
					echo $e->getMessage();
					exit();
				}			
			}
		}
		else
		{
			foreach($system as $key=>$item)	
			{
				try
				{
					if(!file_exists(ROOT_FOLDER.$item))
					{
						include('Bin/Core/Exceptions.php');
						$ertmp = 'File Not Found in the following path '.ROOT_FOLDER.$item;
						throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
					}
					else
						include(ROOT_FOLDER.$item);							
				}
				catch(Bin_Core_Exceptions $e)
				{
					echo $e->getMessage();
					exit();
				}			
			}
		}
	}	
	
	/**
	 * This function will include the library files which are specified in XML file
	 * if ids are passed as an array only that particular library files will be included
	 *
	 * @param array $library
	 * @param mixed $ids
	 */
	private function loadLibrayFiles($library, $ids='')
	{
		if(is_array($ids))
		{
			foreach($ids as $key=>$item)
			{
				try
				{
					if(!file_exists(ROOT_FOLDER.$library[$item]))
					{
						include('Bin/Core/Exceptions.php');
						$ertmp = 'File Not Found in the following path '.ROOT_FOLDER.$library[$item];
						throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
					}
					else
						include(ROOT_FOLDER.$library[$item]);							
				}
				catch(Bin_Core_Exceptions $e)
				{
					echo $e->getMessage();
					exit();
				}
			}
		}
		else
		{
			foreach($library as $key=>$item)	
			{
				try
					{
						if(!file_exists(ROOT_FOLDER.$item))
						{
							include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
							$ertmp = 'File Not Found in the following path '.ROOT_FOLDER.$item;
							throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
						}
						else
							include(ROOT_FOLDER.$item);							
					}
					catch(Bin_Core_Exceptions $e)
					{
						echo $e->getMessage();
						exit();
					}
			}
		}
	}
	
	/**
	 * This function will invoke the startUP function which will start the controller
	 * 
	 *
	 * @param array $domapping
	 * @param array $globalmapping
	 * @param mixed $appsetup
	 */
	private function loadControllerFiles($domapping,$globalmapping,$appsetup='')
	{
		if(strlen($this->do)==0)
			$this->startUp($globalmapping,'invalidrequest',$appsetup);
		else if(array_key_exists($this->do,$domapping))
			$this->startUp($domapping,$this->do,$appsetup);
		else if(array_key_exists($this->do,$globalmapping))
			$this->startUp($globalmapping,$this->do,$appsetup);
		else 
			$this->startUp($globalmapping,'invalidrequest',$appsetup);
	}	
	
	/**
	 * This function include the controller and invoke the function specified in XML file
	 *
	 * @param array $arr
	 * @param string $key
	 * @param mixed $appsetup
	 */
	private function startUp($arr,$key,$appsetup='')
	{
		try
		{
			if(!file_exists('classes/Controller/'.$arr[$key]['controller'].'.php'))
			{
				include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
				$ertmp = 'File Not Found in the following path '.'classes/Controller/'.$arr[$key]['controller'].'.php';
				throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
			}
			else		
			{
					if((isset($arr[$key]['escapepost']) && $arr[$key]['escapepost']==='yes') || (!isset($arr[$key]['escapepost']) && $appsetup['escapepost']==='yes'))
						$this->escapeRequest('post');
					if((isset($arr[$key]['escapeget']) && $arr[$key]['escapeget']==='yes') || (!isset($arr[$key]['escapeget']) && $appsetup['escapeget']==='yes'))
						$this->escapeRequest('get');				
						
				include('classes/Controller/'.$arr[$key]['controller'].'.php');
				$class = "Controller_".$arr[$key]['controller'];			
				$function = $arr[$key]['function'];
				$obj = new $class;
				$obj->$function();			
			}
		}
		catch(Bin_Core_Exceptions $e)
		{
			echo $e->getMessage();
			exit();
		}
	
	}

	/**
	 * This function will invoke the escaping global variable functions based
	 * on the the $variable value
	 *
	 * @param string $variable
	 */
	
	private function escapeRequest($variable)
	{
		if(!class_exists('Bin_Security'))
		{
			try
			{
				if(!file_exists(ROOT_FOLDER.'Bin/Security.php'))
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'File Not Found in the following path '.ROOT_FOLDER.$item;
					throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
				}
				else
					include(ROOT_FOLDER.'Bin/Security.php');		
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getMessage();
				exit();
			}
		}
		if($variable==='post')		
			Bin_Security::escapePost();
		else if($variable==='get')
			Bin_Security::escapeGet();
		else if($variable==='cookie')
			Bin_Security::escapeCookie();		
		else if($variable==='session')
			Bin_Security::escapeSession();	
	}
}
?>