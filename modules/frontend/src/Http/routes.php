<?php

$router->add(
    "/",
    array(
        'module'     => 'frontend',
        'controller' => 'index',
        'action'     => 'index'
    )
);

$router->add(
    "/:module/:controller/:action/:params",
    array(
        'module'     => 1,
        'controller' => 2,
        'action'     => 3,
        'params'     => 4
    )
);
