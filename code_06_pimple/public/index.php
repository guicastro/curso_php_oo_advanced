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

/*
$container['date'] = function() {

    date_default_timezone_set('America/Cuiaba');

    return new \DateTime;
};
- Forma padrão, desta forma sempre será o mesmo objeto
*/

$container['date'] = $container->factory(function() {

    date_default_timezone_set('America/Cuiaba');

    return new \DateTime;
});


echo "<pre>01: ";
var_dump($container['date']);
echo "</pre>";

sleep(2); //2 segundos de pausa para demonstrar que o instanciamento cria dois objetos diferentes
echo "<pre>02: ";
var_dump($container['date']);
echo "</pre>";