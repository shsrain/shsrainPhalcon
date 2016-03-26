<?php

namespace Backend\Controllers;

use Core\Http\Controllers\AdminController as Controller;

class IndexController extends Controller
{
	public function initialize()
	{
       parent::initialize();
	}
    
	public function indexAction()
	{
        
        if($this->userService->loginCheck() == false){
            $this->response->redirect("admin/login")->sendHeaders();
        } 
        try {
        	$userData = $this->userService->info();
        } catch (\Exception $e) {
        	$this->flash->error($e->getMessage());
        }        
        foreach ($userData as $key=>$car) {
            echo "Name: ", $car->username, "\n";
        }
        
	}
}
