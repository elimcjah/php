<?php
define ("alpha",1);
define ("email",2);
define ("url",3);
define ("phone",4);
 
class Validator
{
	private $types = array("alpha"=>alpha,"email"=>email,"url"=>url,"phone"=>phone);
	private $error;
	
	public function __construct()
	{
	
	}
	
	private function CheckType($type)
	{
		if (array_search($type,$this->types))
		{
			return true;
		}
		else
		{
			$this->error = "Not a valid type";
			return false;
		}
	}
	
	public function GetError()
	{
		return $this->error;
	}	
	
	public function Validate($input,$type)
	{
		if ($this->CheckType($type))
		{
			switch($type)
			{
				case($this->types["alpha"]):
					return $this->ValidateAlpha($input);
					break;
				
				case($this->types["email"]):
					return $this->ValidateEmail($input);
					break;
				
				case($this->types["url"]):
					return $this->ValidateURL($input);
					break;
				
				case($this->types["phone"]):
					return $this->ValidatePhone($input);
					break;
				
				default:
					return false;
					break;
			}
		}
		else
		{
			return false;
		}
	}
	
	private function ValidateEmail($input)
	{    
		$email = filter_var($input, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{  
			$this->error = "$email is not a valid email address.<br>";  
			return false;
		}
		else 
		{
			return $email;
		}
	}
	
	private function ValidateURL($input)
	{
		$url = filter_var($input, FILTER_SANITIZE_URL);  
		if (!filter_var($url, FILTER_VALIDATE_URL)) 
		{  
			$this->error = "$url is not a valid URL.<br>";  
			return false;
		}
		else
		{
			return $url;
		}
    	}
	
	private function ValidatePhone($input)
	{
		if (!preg_match( '/^[+]?([\d]{0,3})?[\(\.\-\s]?([\d]{3})[\)\.\-\s]*([\d]{3})[\.\-\s]?([\d]{4})$/',$input )) 
		{
			$this->error = "$input is not a valid phone number.<br>";
			return false;
		} 
		else 
		{
			return $input;
		}
	}
	
	private function ValidateAlpha($input)
	{
		return filter_var($input,FILTER_SANITIZE_STRING);

	}

	public function GetValidTypes()
	{
		foreach($this->types as $key => $value)
		{
			echo  $key . " - " . $value . "<br>";
		}
	}
}


?>