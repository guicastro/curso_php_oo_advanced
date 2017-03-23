<?php

//Este é o autoload para as classes
//O arquivo autoload é criado quando instala o composer
require_once("../vendor/autoload.php");


/*##########################


##########################*/


//Chama o método dentro do Container para conectar
$db = Container::getConn();

$product = Container::getProduct();

$list = $product->Listar();


echo "<pre>";
var_dump($list);
echo "</pre>";
