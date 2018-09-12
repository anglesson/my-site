<?php

/**
 * 
 */
class Paginacao
{
	private $pgAtual;
	private $pgAnterior;
	private $pgProxima;
	private $itensPorPg;
	private $pgTotal;
	private $totalRegistro;

	public function __construct(){
		echo "Hello";
	}

	public function avancarPg(){
		$this->pgAtual++;
	}

	public function setPgAtual($pg){
		$this->pgAtual = $pg;
	}

	public function getPgAtual()
	{
		return $this->pgAtual;
	}

	public function getPgAnterior()
	{
		$pAtual = $this->getPgAtual();

		if($pAtual <= 1){
			return $this->pgAnterior = 1;
		} else{
			return $this->pgAnterior = $pAtual - 1;
		}
		
	}

	public function getPgProxima()
	{
		$pAtual = $this->getPgAtual();
		return $this->pgAnterior = $pAtual + 1;
	}

	public function regPorPg(){
		
	}
}