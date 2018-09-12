<?php

/**
 * 
 */
class ClassFilho extends ClassPai
{
	protected $paiProtected;
	private $paiPrivate;
	public $paiPublic;

	function setPaiProtected($value){
		parent::$paiProtected = $value;
	}

	function setPaiPrivate($value){
		$this->paiPrivate = $value;
	}

	function setPaiPublic($value){
		$this->paiPublic = $value;
	}

	/*function __construct()
	{
	 	echo "Eu sou a classe Filho.";
	}
	*/
}