<?php

/**
 * 
 */
class ClassNeto extends ClassFilho
{
	public ClassPai $paiProtected;
	
	function __construct()
	{
		parent::__construct();
	}
}