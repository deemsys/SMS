<?php  
/**
 * Configuration
 *
 * This class will read the dll file regarding to the current
 * root folder and invoke controllers based on the querytstring
 *
 * @package		Bin
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------  
class Bin_Configuration extends Bin_Security 
{
	/**
	 * Contains the database information
	 * @access protected
	 *
	 * @var array
	 */	
	protected  $config = array();
	public  $prefix;
	
	/**
	 * Constructs a Bin_Configuration object 
	 * which will store the database access details
	 *
	 * @return Bin_Configuration
	 */
	public function Bin_Configuration() 
	{  
		$this->config["HOST"] = "localhost";  
		$this->config["USER"] = "deemspro_app123";  
		$this->config["PASSWORD"] ="research_app";  
		$this->config["DB"] ="deemspro_research_app";
		$this->prefix = "";
	}
}	

?>
