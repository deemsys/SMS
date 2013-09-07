<?php
/***************************************************************************

 * Product Name				: AJ MATRIX DNA

 * Version 				: V 3.1

 * Release Date				: Saturday, October 31, 2009

 * Copyright				: (C) 2009 AJ Square Inc

 * Email				: info@ajsquare.com

 * Company URL				: www.ajsquare.com

 ***************************************************************************/

/****************************************************************************
* Licence Agreement: 

 *     This program is a Commercial licensed software. You are not authorized to redistribute it and/or modify/and or sell it under any publication either user and enterprise versions of the License (or) any later version is applicable for the same. If you have received this software without a license, you must not use it, and you must destroy your copy of it immediately. If anybody illegally uses this software, please contact info@ajsquare.com.

*****************************************************************************/
?>

<?php
/**
 * Querying
 *
 * This class contains functions to process the 
 * query and give the outputs
 * 
 *
 * @package		Bin
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ------------------------------------------------------------------------  
class Bin_Query extends Bin_DbConnect 
{
	
	var $totrows;
	var $records;
	var $insertid;
	var $sql;
	
	
	/**
	 * Enter description here...
	 *
	 * @param string $sql
	 * @param array $fields
	 * @return boolean
	 */
	function executeQuery($sql)
	{
		$i=0;
		$rs = mysql_query($sql); 		
		$this->insertid = mysql_insert_id();
		
		if(!mysql_affected_rows() || mysql_num_rows($rs) < 1)
			return false;
		else
		{
			$this->totrows = mysql_num_rows($rs);
			while($fetch = mysql_fetch_array($rs))
			{
				$this->records[$i] = $fetch;
				$i++;
			}
			for($i=0;$i<count($this->records);$i++)
			{
				foreach ($this->records[$i] as $key=>$item)
				{
					if(is_numeric($key))
						unset($this->records[$i][$key]);
				}
			}
			return true;
		}
	}

	/**
	 * @param string $sql
	 * @return boolean
	 */
	function updateQuery($sql)
	{
		$rs = mysql_query($sql); 
		$sql = $sql;
		$this->insertid = mysql_insert_id();
		if(!$rs)
			return false;
		else
			return true;
	}	
}
?>