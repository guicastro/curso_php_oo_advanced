<?php

class Container {

	//quando um métofo é static pode-se utilizá-lo na aplicação sem precisar instanciar o objeto
	public static function getProduct() {

		//self:: serve para buscar um método dentro da própria classe
		return new Product(self::getConn());
	}

	public static function getConn() {

		return new Conn("mysql:host=localhost;dbname=php_oo_advanced","banco_dados","abcd1234");
	}
}