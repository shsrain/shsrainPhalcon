<?php

namespace Backend\Models\Services\Service;

use Backend\Models\Services\Contracts\User\User as UserInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Http\Response\Cookies;

class User implements InjectionAwareInterface,UserInterface
{
    protected $di;
    
    protected $userLogin = false;
    
    protected $userInfo = null;
    
    protected $userHash = '';

    public function setDi(\Phalcon\DiInterface $di)
    {
        $this->di = $di;
    }

    public function getDi()
    {
        return $this->di;
    }    
    
	public function getLast()
	{
		return $this->getDi()->get('userRepository')->getLast();
	}
    
    public function loginCheck(){
        if($this->userLogin == true){
            return true;
        }else{
            return false;
        }
    }
    
    public function login($data = array())
    {
        if($this->loginCheck() == true){
            return false;
        }
        
        $username = $data['username'];
        $password = md5($data['password']);
        $user = $this->getDi()->get('userRepository')->findUser($username,$password);

        if($user == false){
            return false;
        }
        
        $this->userLogin = true;
        $this->userInfo = $user;
        $this->userHash = md5($user->uid.$user->username.$user->password);
        //$cookies = new Cookies();
        //$cookies->useEncryption(false);
        //$cookies->set('login', $this->userHash, time() + 15 * 86400);
        
        $userOnline['last_visit'] = time();
        $userOnline['login_ip'] = $_SERVER["REMOTE_ADDR"];
        $userOnline['roleid'] = 0;
        $userOnline['userid'] = $user->uid;
        $userOnline['sessionid'] = $this->userHash;
        $this->getDi()->get('userRepository')->updateLogin($userOnline);

        return true;
    }

    public function logout()
    {
        $this->userLogin = false;
        $this->userInfo = null;
        $this->hash = '';
        return true;
    }
    
    public function register($data = array())
    {
        $newUser['username'] = $data['username'];
        $newUser['password'] = md5($data['password']);
        $this->getDi()->get('userRepository')->addUser($newUser);
        return $this->getDi()->get('userRepository')->uid;
    }
    
    public function generateUserId()
    {
        return true;
    }

    public function checkLogin()
    {
        return true;
    }

    public function getUserId()
    {
        return true;
    }
    
    public function info(){
        return $this->userInfo;
    }
}
