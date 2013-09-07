<?php
/**
 * Initialize
 *
 * This class will initialize the application it is the 
 * starting point of each and every page
 *
 * @package		Bin_Core
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------

class Bin_Core_Initialize 
{
	/**
	 * Constructs a Bin_Core_Initialize object with given parameters
	 * if $build is 1 then compile and save process will work else
	 * only assembler will work. Compile and save process only needed
	 * in the development phase. 
	 *
	 * @param integer $build
	 * @return Bin_Core_Initialize
	 */
	public function Bin_Core_Initialize($build=0)
	{
		if($build)
		{
			include_once(ROOT_FOLDER.'Bin/Build/Save.php');
			new Bin_Build_Save();
		}	
		include(ROOT_FOLDER."Bin/Core/Assembler.php");
		new Bin_Core_Assembler();
	}
}


?>