<?php

namespace App;

class Loader
{
    public function register(){
        
    $loader = new \Phalcon\Loader();
    $loader->registerNamespaces(array(
        'Phalcon' => APP_PATH.'app'
    ));

    $loader->register();
    }

} 