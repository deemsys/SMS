<?php
/**
 * Databse Connection
 *
 * This class will make a connect to the databse server
 *
 * @package		Bin
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------  
class Bin_DbConnect extends Bin_SetConfiguration
{
	
	/**
	 * Holds the status of the connection
	 * 
	 * @access private	 
	 * @var integer
	 */
	private $connstatus;
	
	/**
	 * Constructs a Bin_DbConnect object with given parameters
	 * this will make the database connection
	 *
	 * @param string $dbhost
	 * @param string $dbuser
	 * @param string $dbpass
	 * @param string $dbname
	 * @return Bin_DbConnect
	 */
	public function Bin_DbConnect($dbhost=HOST, $dbuser=USER, $dbpass=PASSWORD, $dbname=DB)
	{
		if(!$this->connstatus)
		{
			$conn = @mysql_connect($dbhost,$dbuser,$dbpass);
			try
			{
				if(!$conn)
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'Unable to Connect Database Server. Please check your configuration file.';
					throw new Bin_Core_Exceptions($ertmp,Bin_Core_Exceptions::FATAL);				
				}
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getMessage();
				exit();
			}
			
			$db = @mysql_select_db($dbname,$conn);
			try
			{
				if(!$db)
				{
					include(ROOT_FOLDER.'Bin/Core/Exceptions.php');
					$ertmp = 'Unable to Connect Database. Please check your configuration file.';
					$desc = 'The database name provided in the Configuration.php file is invalid or not available.<br>
							 Please check the <i>$this->config["DB"]</i> setting in the Configuration.php file ';
					throw new Bin_Core_Exceptions($ertmp,$desc,Bin_Core_Exceptions::FATAL);				
				}
			}
			catch(Bin_Core_Exceptions $e)
			{
				echo $e->getMessage();
				exit();
			}
			
			$this->connstatus=1;
		}
	}


	/**
	 * This function will close the database connection 
	 * and change the connection status 
	 *
	 */
	
	public function closeDbConnect()
	{
		if(mysql_close())
			$this->connstatus=0;
		else 
			$this->connstatus=1;
	}


}
new Bin_DbConnect();
?>