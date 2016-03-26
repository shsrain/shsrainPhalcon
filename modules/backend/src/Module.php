<?php

namespace Backend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\DiInterface;
use Phalcon\Mvc\Dispatcher;
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
			'Backend\Controllers' => APP_PATH.'../modules/backend/src/Http/controllers/',
            'Backend\Models' => APP_PATH.'../modules/backend/src/Models/',
		));

		$loader->register();
	}

    /**
     * 注册模块的特定服务
     */
	public function registerServices(DiInterface $di)
	{
      
		// 注册一个调度程序
		$di->set('dispatcher', function () {
			$dispatcher = new Dispatcher();
			$dispatcher->setDefaultNamespace("Backend\Controllers\\");
			return $dispatcher;
		});

        $this->registerConfig($di);
        $this->registerDbSource($di);
        $this->registerModels($di);
        $this->registerRepositories($di);
        $this->registerComponents($di);
        $this->registerViews($di);
        $this->registerAssets($di);
	}
    
    // 读取配置
    public function registerConfig(DiInterface $di){
		$di->set('mconfig', function () {
            $settings = require_once( APP_PATH.'../modules/backend/config/config.php');
			return  new \Phalcon\Config($settings);
		});
    }
    
    // 注册数据库
    public function registerDbSource(DiInterface $di){
		$di->set('db', function () use($di) {
			return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
				"host" => $di['mconfig']->database->host,
				"username" => $di['mconfig']->database->username,
				"password" => $di['mconfig']->database->password,
				"dbname" => $di['mconfig']->database->dbname,
                "charset" => "utf8" 
			));
		});
    }
    
    //  注册模型
    public function registerModels(DiInterface $di){
        $di->set('entityUser','\Backend\Models\Entities\User');
        $di->set('entitySiteConfig','\Backend\Models\Entities\SiteConfig');
    }
    
    // 注册仓储
    public function registerRepositories(DiInterface $di){
         $di->set('userRepository',function(){
            return \Backend\Models\Repositories\Repositories::get('User');
        });
         $di->set('siteConfigRepository',function(){
            return \Backend\Models\Repositories\Repositories::get('SiteConfig');
        });        
    }
    
    // 注册组件
    public function registerComponents(DiInterface $di){
        $di->set('userService',function(){
            return \Backend\Models\Services\Services::get('User');
        });  
        $di->set('siteConfigService',function(){
            return \Backend\Models\Services\Services::get('SiteConfig');
        });
    }
    
    // 注册视图
    public function registerViews(DiInterface $di){
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
    }
    
    // 增加资源
    public function registerAssets(DiInterface $di){
        $di['assets']->collection('header2')->addCss('css/style.css')->addCss('css/index.css');
        
    }
}
