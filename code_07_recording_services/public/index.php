<?php

//Este é o autoload para as classes
//O arquivo autoload é criado quando instala o composer
require_once("../vendor/autoload.php");


/*##########################

    - Pimple é um gerenciador de serviços para facilitar o uso e manutenção de classes
    - A forma padrão de criação de objetos é dentro de função, tal como $container['date'] = function() { argumentos };
    - Na forma padrão, sempre o objeto instanciado deverá ser chamado com a variável atribuída, no caso do exemplo apenas $container['date']
    - Por padrão semo
    - Com o uso do factory, sempre que instanciar um objeto ele cria um novo, no caso o exemplo é $container['date'] = $container->factory(function() { argumentos });

##########################*/

use Pimple\Container;

$container = new Container();

$container['conn'] = function() {

	return new \Source\Conn("mysql:host=localhost;dbname=php_oo_advanced","banco_dados","abcd1234");
};

$container['product'] = function($c) {

	return new \Source\Product($c['conn']);
};

$list = $container['product']->Listar();

echo "<pre>01: ";
var_dump($list);
echo "</pre>";
