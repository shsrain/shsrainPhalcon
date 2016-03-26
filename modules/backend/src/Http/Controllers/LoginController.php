<?php

namespace Backend\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class LoginController extends Controller
{
    public function indexAction(){

        $this->assets->addCss('vendor/AmazeUi/2.5.2.min/css/amazeui.css');
    }
    
    public function loginAction(){
        if($this->request->isPost()!=true){
            $this->response->redirect("admin/login")->sendHeaders();
            return false;
        }
        
        $data = array();
        $data['username'] = $this->request->getPost('username');
        $data['password'] = $this->request->getPost('password');

        try {
        	$userData = $this->userService->login($data);
        } catch (\Exception $e) {
        	$this->flash->error($e->getMessage());
        }
        
        if($userData){
            $this->response->redirect("backend/index/add")->sendHeaders();
        }
    }
    
    public function logoutAction(){
        if($this->userService->logout()){
            $this->response->redirect("admin/login")->sendHeaders();
        }
    }
}
