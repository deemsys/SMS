<?php
/**
 * 
 */
class Bin_SetConfiguration extends Bin_Configuration  
{
	/**
	 * This will set configuration settings global
	 *
	 * @return void
	 */
	function setConfig()
	{
		$this->Bin_Configuration();
		foreach($this->config as $key=>$value)
			define($key,$value);
	}
}
$genconfig = new Bin_SetConfiguration();
$genconfig->setConfig();
?>