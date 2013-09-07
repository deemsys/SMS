<?php

class Model_MDemo
{
	var $output = array();
	
	function showIndex()
	{
		/**
		*
		* Here database query comes
		*
		*/
		$query = new Bin_Query();
		$sql = "SELECT * FROM reg_users";
		$query->executeQuery($sql);
		return Display_DDemo::showIndex($query->records);

	}
	
		function showFirst()
	{
		/**
		*
		* Here database query comes
		*
		*/
		return Display_DDemo::showFirst();

	}
	function showTopics()
	{
		
		return Display_DPolls::showTopicsList();
	
	}
}



?>