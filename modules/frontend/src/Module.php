<?php

namespace Frontend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\DiInterface;
use Phalcon\Mvc\Dispatcher as MvcDispatcher;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface
{
    /**
     * 注册特定模块的自动加载
     */
	public function registerAutoloaders(DiInterface $di = null)
	{

		$loader = new Loader();

		$loader->registerNamespaces(array(
			'Frontend\Controllers' => APP_PATH.'../modules/frontend/src/Http/controllers/',
			'Frontend\Models' => APP_PATH.'../modules/frontend/models/',
		));

		$loader->register();
	}

    /**
     * 注册模块的特定服务
     */
	public function registerServices(DiInterface $di)
	{
		// 注册一个调度程序
        $di->setShared('dispatcher', function () {

            $eventsManager = new EventsManager();
            $eventsManager->attach("dispatch:beforeException", function ($event, $dispatcher, $exception) {
                if ($exception instanceof DispatcherException) {
                    switch ($exception->getCode()) {
                        case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
                        case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
                            $dispatcher->forward(array(
                                'controller' => 'errors',
                                'action'     => 'show404',
                                'params'     => array('message' => $exception->getMessage())
                            ));
                            return false;
                    }
                }

                $dispatcher->forward(array(
                    'controller' => 'errors',
                    'action'     => 'show500'
                ));
                return false;
            });

            $dispatcher = new MvcDispatcher();
            $dispatcher->setDefaultNamespace('Frontend\Controllers\\');
            $dispatcher->setEventsManager($eventsManager);
            return $dispatcher;
        });
        
        // 注册视图组件
        $di->set('view', function () {
            $view = new View();
            $view->setViewsDir(__DIR__ . '/../views/default/');
            $view->registerEngines(
                array(
                    ".volt" => function ($view, $di) {
                        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

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
        
        // 注册数据库组件
		$di->set('db', function () {
			return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
				"host" => "localhost",
				"username" => "root",
				"password" => "",
				"dbname" => "fcdrep"
			));
		});
        
        // 读取配置
		$di->set('configs', function () {
            $settings = require_once(APP_PATH.'../config/config.php');
			return  new \Phalcon\Config($settings);
		});        
        
	}
}
