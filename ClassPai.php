<?php

/**
 * 
 */
class ClassPai
{
	protected $paiProtected;
	private $paiPrivate;
	public $paiPublic;

	function __construct()
	{
		$this->paiPublic = 'Publico';
		$this->paiPrivate = 'Privado';
		$this->paiProtected = 'Protegido';
	}

	function imprimePai()
	{
		echo $this->paiPublic."</br>";
		echo $this->paiPrivate."</br>";
		echo $this->paiProtected."</br>";
	}
}