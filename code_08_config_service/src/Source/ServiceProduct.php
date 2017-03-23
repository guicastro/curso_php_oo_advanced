<?php

namespace Source;

class ServiceProduct implements IServiceProduct {

	private $db;
	private $product;

	public function __construct(\IConn $db, IProduct $product) {
	// public function __construct($db, IProduct $product) {

		$this->db = $db->connect();
		$this->product = $product;
	}

	public function Listar() {

		$query = "SELECT * FROM products";

		$execute = $this->db->prepare($query);

		$execute->execute();

		return $execute->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function Salvar() {


	}

	public function Atualizar() {


	}

	public function Apagar() {


	}
}