<?php
/**
 * Exceptions
 *
 * This class handles exceptions in the core functions 
 * 
 * @package		Bin_Core
 * @category	Core
 * @author		AJDF Development Team
 * @link		http://ajdf.ajsquare.com
 * @version 	1.0
 */

// ---------------------------------------------------------------------

class Bin_Core_Exceptions extends Exception
{
	/**
	 * Constant, it is a type of error 
	 *
	 */
	const FATAL = 1;
	
	/**
	 * Constant, it is a type of error
	 *
	 */
	const PARSE = 2;
	
	/**
	 * Constant, it is a type of error
	 *
	 */
	const WARNING = 3;
	
	/**
	 * Error description for error constants
	 *
	 * @var array
	 */
	private $errors = array(1=>'Fatal Error',2=>'Parse Error',3=>'Warning');
	
	/**
	 * Constructs a Bin_Core_Exceptions object with given parameters
	 * this will call inbuilt Exception constructor with given parameters
	 *
	 * @param string $msg
	 * @param string $desc
	 * @param integer $code
	 * @return Bin_Core_Exceptions
	 */
	public function Bin_Core_Exceptions($msg,$desc='',$code=0)
	{
		parent::__construct($this->getErrorText($msg,$desc,$code),$code);
	}		

	/**
	 * This function will build a html erro message based on 
	 * the parameters given.
	 *
	 * @param string $errmsg
	 * @param string $desc
	 * @param integer $code
	 * @return string
	 */
	
	private function getErrorText($errmsg,$desc,$code)
	{
		
		return '<html><head><title>AJDF: Error Found! </title>
		<script>
			function showDetails()
			{
				document.getElementById("desc").style.display = "";				
			}
		</script>
		</head>
		<body>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFBE8">
  					<tr>
						<td width="3%" bgcolor="#FFCC00">&nbsp;</td>
						<td width="1%" bgcolor="#FFFBE8">&nbsp;</td>
					    <td align="center" bgcolor="#FFFBE8" style="color:#660000"><img src="'.ROOT_FOLDER.'images/ajlogo.png"  /></td>
				      <td align="center" bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
					  <td width="64%" align="center" bgcolor="#FFFBE8" style="color:red"><b>AJDF ERROR!</b></td>
						<td width="13%">&nbsp;</td>
					</tr>
  					<tr>
  					  <td bgcolor="#FFCC00">&nbsp;</td>
					  <td width="1%" bgcolor="#FFFBE8">&nbsp;</td>
  					  <td width="10%" bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
  					  <td width="9%" bgcolor="#FFFBE8" style="color:#660000">Error Type</td>
  					  <td colspan="2" bgcolor="#FFFBE8" style="color:#660000"><b>'.$this->errors[$code].'</b></td>
    </tr>
                    <tr>
                      <td bgcolor="#FFCC00">&nbsp;</td>
                      <td bgcolor="#FFFBE8">&nbsp;</td>
                      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
                      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
                      <td colspan="2" bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
                    </tr>
				    <tr>
				  					  <td bgcolor="#FFCC00">&nbsp;</td>
									  <td width="1%" bgcolor="#FFFBE8">&nbsp;</td>
				                      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				      <td bgcolor="#FFFBE8" style="color:#660000">Description</td>
				  					  <td colspan="2" bgcolor="#FFFBE8" style="color:#660000"><b>'.$errmsg.'</b></td>
				    </tr>
				    <tr>
				      <td bgcolor="#FFCC00">&nbsp;</td>
				      <td bgcolor="#FFFBE8">&nbsp;</td>
				      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				      <td colspan="2" bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				    </tr>
				    <tr>
				  					  <td bgcolor="#FFCC00">&nbsp;</td>
									  <td width="1%" bgcolor="#FFFBE8">&nbsp;</td>
				                      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				  					  <td colspan="2" bgcolor="#FFFBE8" style="color:#660000"><a href="#" onclick="showDetails()">Show Details</a></td>
				    </tr>
				    <tr id="desc" style="display:none">
				  					  <td bgcolor="#FFCC00">&nbsp;</td>
									  <td width="1%" bgcolor="#FFFBE8">&nbsp;</td>
					                  <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				      <td bgcolor="#FFFBE8" style="color:#660000">&nbsp;</td>
				  					  <td colspan="2" bgcolor="#FFFBE8" style="color:#660000">'.$desc.'</td>
				    </tr>
									</table>
									</body>
									</html>
									';
		
	}



}



?>