<?php

namespace Source;

class Product {

	private $db;

	// public function __construct(\IConn $db) {
	public function __construct($db) {

		$this->db = $db->connect();
	}

	public function Listar() {

		$query = "SELECT * FROM products";

		$execute = $this->db->prepare($query);

		$execute->execute();

		return $execute->fetchAll(\PDO::FETCH_ASSOC);
	}
}