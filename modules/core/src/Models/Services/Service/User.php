<?php

namespace Core\Models\Services\Service;

use Core\Models\Repositories\Repositories;

class User
{
	public function getLast()
	{
		return Repositories::get('User')->getLast();
	}
    
    public function login()
    {
        return true;
    }

    public function logout()
    {
        return true;
    }
    
    public function register()
    {
        return true;
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
}
