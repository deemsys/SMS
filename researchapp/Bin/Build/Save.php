<?php
include(ROOT_FOLDER.'Bin/Build/Compile.php');
/**
 * Save
 *
 * This class will inherit Compiler class and save the output
 * array in dll files. 
 *
 * @package		Bin_Build
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------

class Bin_Build_Save extends Bin_Build_Compile 
{
	
	/**
	 * Constructs a Bin_Build_Save object with given parameters
	 * also it will invoke xml parsing process
	 * 
	 * 
	 * @return Bin_Build_Save
	 */
	public function Bin_Build_Save()
	{		
		$config = $this->readConfigFile();	//invoking web.xml parsing
		$appsetup = $this->buildAppSetup($config); //creating app setup array
		$sysfiles = $this->buildSystemConfig($config); //creating system config array
		$libraries = $this->buildLibraryConfig($config); //creating library config array
		$controllers = $this->buildControllerConfig($config); //creating controller config array			

		/**
		 * All xml information will be converted in to an array
		 * based on the root folder it will be stored as dll file
		 * in the following we checking whether this configuration file
		 * is related to this root folder.
		 */
		if(!$controllers)
			return false;
			
		$content = "<?php \n\n".' $system = '.var_export($sysfiles, true) . ";\n";
		$content .= "\n\n".' $appsetup = '.var_export($appsetup, true) . ";\n ";
		$content .= "\n\n".' $libraries = '.var_export($libraries, true) . ";\n ";
		$content .= "\n\n".' $domapping = '.var_export($controllers['domapping'], true) . ";\n ";
		$content .= "\n\n".' $globalmapping = '.var_export($controllers['globalmapping'], true) . ";\n ?>";

		@mkdir(ROOT_FOLDER.'Built/'.CURRENT_FOLDER,0777);
		@chmod(ROOT_FOLDER.'Built/'.CURRENT_FOLDER,0777);
		
		if ($fp = @fopen(ROOT_FOLDER.'Built/'.CURRENT_FOLDER."/Dll.php", 'wb'))
		{
			@flock($fp, LOCK_EX);			
			fwrite($fp, $content);
			@flock($fp, LOCK_UN);
			fclose($fp);
			@chmod(ROOT_FOLDER.'Built/'.CURRENT_FOLDER."/Dll.php", 0666);
		}	
	}	
}


?>