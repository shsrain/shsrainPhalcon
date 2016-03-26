<?php

namespace Backend\Models\Repositories\Repository;

use Backend\Models\Entities\UserOnline as EntityUserOnline;
use Phalcon\Di\InjectionAwareInterface;

class User implements InjectionAwareInterface
{
    
    protected $di;
    
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
		return $this->getDi()->get('entityUser')->query()
			->order('datetime DESC')
			->execute();
	}
    
    public function findUser($username,$password){
		return $this->getDi()->get('entityUser')->findFirst(
            array(
                "username" => $username,
                "password" => $password
            ));
    }
    
    public function updateLogin($data = array()){
        
        $where = array('userid'=>$data['userid']);
        $record = EntityUserOnline::findFirst($where);
        if($record){
            $record->last_visit = $data['last_visit'];
            $record->login_ip = $data['login_ip'];
            $record->roleid = $data['roleid'];
            $record->sessionid = $data['sessionid'];
            $result = $record->save();
        }else{
            $entity = new EntityUserOnline();
            $entity->last_visit = $data['last_visit'];
            $entity->login_ip = $data['login_ip'];
            $entity->roleid = $data['roleid'];
            $entity->sessionid = $data['sessionid'];
            $result = $entity->save();            
        }
        if($result){
            return true;
        }
        return false;  
    }
    
    public function addUser($data = array()){
        $entity = $this->getDi()->get('entityUser');
        $entity->username = $data['username'];
        $entity->password = $data['password'];
        $result = $entity->save();
        if(!$result){
            $error = array();
            foreach ($entity->getMessages() as $message) {
                $error[]["Message: "] = $message->getMessage();
                $error[]["Field: "] = $message->getField();
                $error[]["Type: "] = $message->getType();
            }
            return false;
        }else{
            return true;
        }
    }
    
}
