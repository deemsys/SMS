<?php
error_reporting(E_ALL);
class Model_Validation_CheckInputs
{
	

	function Model_Validation_CheckInputs($module)
	{
		
		//echo "dgdfhg"; 
		($module == 'first')?$this->checkLogin():'';
		($module == 'second')?$this->checkGreen():'';
	}


	
	function checkLogin()
	{

		//echo "dgdfhg"; 
		if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{
			//echo "karthika";
			if(isset($_POST['txt']) && isset($_POST['txt1']) ) 
			{
				//echo "karthika"; exit;
				$obj = new Model_Validation_FormValidation('first');
				return $obj;
			}
			else 
			{
				
				header("Location:?do=temp");
				exit();
			}
		}
		else 
		{
			header("Location:?do=temp");
			exit();
		}
	}

function  checkGreen()
{
	if(strtolower($_SERVER['REQUEST_METHOD'])=="post")
		{
			//echo "karthika";
			if(isset($_POST['txt'])) 
			{
				//echo "karthika"; exit;
				$obj = new Model_Validation_FormValidation('second');
				//return $obj;
			}
			else 
			{
				
				header("Location:?do=temp");
				exit();
			}
		}
		else 
		{
			header("Location:?do=temp");
			exit();
		}



}


	
	
}	
	
			
?>