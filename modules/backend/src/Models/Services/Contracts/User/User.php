<?php

namespace Backend\Models\Services\Contracts\User;

interface User{
    
    public function login();

    public function logout();
    
    public function register();
    
    public function generateUserId();

    public function checkLogin();

    public function getUserId();
}