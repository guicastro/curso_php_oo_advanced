<?php

require_once("IConn.php");
require_once("Conn.php");
require_once("Product.php");

// $db = new \PDO("mysql:host=localhost;dbname=php_oo_advanced","banco_dados","abcd1234");

$db = new Conn("mysql:host=localhost;dbname=php_oo_advanced","banco_dados","abcd1234");

/*
$query = "SELECT * FROM products";

$execute = $db->prepare($query);

$execute->execute();

$list = $execute->fetchAll(\PDO::FETCH_ASSOC);
- Conteúdo transferido para classe Produto
*/

$product = new Product($db);

$list = $product->Listar();


echo "<pre>";
var_dump($list);
echo "</pre>";
