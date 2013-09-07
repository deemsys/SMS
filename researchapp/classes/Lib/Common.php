<?php

class Lib_Common
{
	function Prefix()
	{
		$objprefix = new Bin_Configuration;
		return $objprefix->prefix;
	}
}
?>