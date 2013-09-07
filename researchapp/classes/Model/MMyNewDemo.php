<?php
class Model_MMyNewDemo
{
	var $output = array();
	
	function controlNew()
	{
		/**
		*
		* Here database query comes
		*
		*/
		$query = new Bin_Query();
		$sql = "SELECT * FROM reg_users";
		$query->executeQuery($sql);
		return Display_DMyNewDemo::controlNew($query->records);
	}
	
	function controlNewNew()
	{
		/**
		*
		* Here database query comes
		*
		*/
		$query = new Bin_Query();
		$sql = "SELECT * FROM mlm_reg_users";
		$query->executeQuery($sql);
		return Display_DMyNewDemo::controlNew($query->records);
	}
}
?>