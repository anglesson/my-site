<?php

/**
 * Classe para conexão com o banco de dados
 */
class Db
{
	protected $pdo;

	function __construct()
	{
		try{
			$this->pdo = new PDO("mysql:host=localhost:3306;dbname=test", "root", "");
		} catch (PDOException $e){
			echo 'Houve erro na conexão com o banco de dados';
		}
	}

}