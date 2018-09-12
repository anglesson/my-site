<?php
require_once 'Db.php';
/**
 * CLASSE UTILIZA AS 4(QUATRO) FUNÇÕES BÁSICAS PARA MANIPULAÇÃO DE DADOS.
 */
class Crud extends Db
{
	/**
	 * @param $uf recebe a uf.
	 * 
	 */
	public function selecionar($uf){
		$stm = $this->pdo->prepare("SELECT CIDADE.NOME AS CIDADE, ESTADO.UF AS UF FROM CIDADE INNER JOIN ESTADO ON ESTADO.ID = CIDADE.ESTADO WHERE ESTADO.UF = :UF ");
		$stm->bindValue(':UF', $uf);
		$stm->execute();
		return $stm->fetchAll();
	}
}