<?php

class Language{
	private $category;
	private $freamwork;

	function setCat( $a ){
		$this->category = $a."<br/>";
	}
	function getCat(){
		return $this->category;
	}
	function setFreamwork( $b ){
		$this->category = $b."<br/>";
	} 
	function getFreamwork(){
		return $this->category;
	}
}

?>