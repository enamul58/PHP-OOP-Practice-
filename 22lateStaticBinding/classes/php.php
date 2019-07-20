<?php
	class php{

	public static function freamwork(){
		echo static::getMethod()."<br/>";
	}
	
	public static function getMethod(){
		return __class__;
	}

}

?>