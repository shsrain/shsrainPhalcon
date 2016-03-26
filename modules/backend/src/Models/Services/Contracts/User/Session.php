<?php

namespace Backend\Models\Services\Contracts\User;

interface Session{
     
    public function start($user);
    
    public function over($user);
    
    public function get($sessionID);
    
    private function storage();
}