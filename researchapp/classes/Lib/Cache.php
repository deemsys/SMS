<?php

class Lib_Cache
{
	var $vars = array();
	var $var_expires = array();
	var $is_modified = false;

	var $sql_rowset = array();
	var $sql_row_pointer = array();
	var $cache_dir = '';
	
	function Lib_Cache($cdir)
	{
		$this->cache_dir = $cdir;	
	}
	
	function get($var_name)
	{	

		if (file_exists($var_name))
		{
			return false;
		}		
		@include($this->cache_dir . "{$var_name}.php");
		return (isset($data)) ? $data : false;		
	}

	/**
	* Put data into cache
	*/
	function put($var_name, $data, $var, $ttl = 31536000)
	{	
		
		if ($fp = @fopen($this->cache_dir . "{$var_name}.php", 'wb'))
		{
			@flock($fp, LOCK_EX);
			//"\n\$expired = (time() > " . (time() + $ttl) . ") ? true : false;\nif (\$expired) { return; }\n\n\$data = " .
			fwrite($fp,  "<?php \n\n $data = ".var_export($var, true) . ";\n?>");
			@flock($fp, LOCK_UN);
			fclose($fp);

			@chmod($this->cache_dir . "{$var_name}.php", 0666);
		}		
	}
}



?>