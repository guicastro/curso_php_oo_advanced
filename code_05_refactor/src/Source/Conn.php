<?php

namespace Source

class Conn implements IConn {

	private $host;
	private $user;
	private $pass;

	public function __construct($host,$user,$pass) {

		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
	}

	public function connect() {

		return new \PDO($this->host,$this->user,$this->pass);

	}
}