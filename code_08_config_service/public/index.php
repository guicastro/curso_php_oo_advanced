<?php

//Este é o autoload para as classes
//O arquivo autoload é criado quando instala o composer
require_once("../vendor/autoload.php");

//arquivo para carregar o arquivo padrão de configuração
require_once("config.php");

//arquivo para carregar o container de serviços padrão
require_once("service.php");

/*##########################

    - Pimple é um gerenciador de serviços para facilitar o uso e manutenção de classes
    - A forma padrão de criação de objetos é dentro de função, tal como $container['date'] = function() { argumentos };
    - Na forma padrão, sempre o objeto instanciado deverá ser chamado com a variável atribuída, no caso do exemplo apenas $container['date']
    - Por padrão semo
    - Com o uso do factory, sempre que instanciar um objeto ele cria um novo, no caso o exemplo é $container['date'] = $container->factory(function() { argumentos });

##########################*/


$list = $container['ServiceProduct']->Listar();


require_once("list.product.php");


// echo "<pre>01: ";
// var_dump($list);
// echo "</pre>";
