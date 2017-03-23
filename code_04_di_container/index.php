<?php

require_once("IConn.php");
require_once("Conn.php");
require_once("Product.php");
require_once("Container.php");


/*##########################

	- Injeção de dependência serve para desenvolvimento futuro
	- Por exemplo, utilizar um padrão para alterar uma classe que é utilizada em mais de 10 páginas, se alterar um só atributo precisa entrar nos 10 locais diferentes, acessando um por um.
	- Para facilitar as alterações futuras, o ideal é criar um Service Container
	- Service Container vai adminsitrar as classes com dependências
	- Quando for preciso alterar alguma dependência ou classe, altera o Service Container e não cada classe

##########################*/


//Chama o método dentro do Container para conectar
$db = Container::getConn();

$product = Container::getProduct();

$list = $product->Listar();


echo "<pre>";
var_dump($list);
echo "</pre>";
