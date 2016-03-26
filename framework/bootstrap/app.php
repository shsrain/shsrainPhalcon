<?php

define('APP_PATH', realpath('..') . '/');

// ����Ӧ�ó���
$app = new \App\Application(APP_PATH);

// ����Ҫ�Ľӿ�
$di = new Phalcon\DI\FactoryDefault();

$autoload = require_once(APP_PATH."config/loader.php");
$loader = new \Phalcon\Loader();
$loader->registerNamespaces($autoload)->register();

$di->set('config', function () {
    $settings = require_once(APP_PATH."config/config.php");
    
    return  new \Phalcon\Config($settings);
}); 

$di['router'] = function () {

    $router = new Phalcon\Mvc\Router();

    $router->setUriSource(\Phalcon\Mvc\Router::URI_SOURCE_SERVER_REQUEST_URI);
    
    $router->removeExtraSlashes(TRUE);
    require APP_PATH.'config/routes.php';
    
    return $router;
};

$di->set('view', function () {
    $view = new Phalcon\Mvc\View();
    $view->setViewsDir(APP_PATH.'resources/views/defalut');
    $view->registerEngines(
        array(
            ".phtml" => function ($view, $di) {
                $volt = new Phalcon\Mvc\View\Engine\Volt($view, $di);

                $volt->setOptions(array(
                    'compiledPath' => APP_PATH.'data/cache/template/',
                    'compiledSeparator' => '_',
                ));
                return $volt;
            }            
        )
    );   
    return $view;
});

$di['url'] = function () {
    $url = new Phalcon\Mvc\Url();
    $url->setBaseUri('/');

    return $url;
};

$di['session'] = function () {
    $session = new Phalcon\Session\Adapter\Files();
    $session->start();

    return $session;
};

// �������
require APP_PATH.'config/services.php';

// ָ����������
$app->setDI($di);

// ����ģ��
$modules = require_once(APP_PATH.'config/modules.php');
$app->registerModules($modules);

// ����Ӧ�ó���
return $app;