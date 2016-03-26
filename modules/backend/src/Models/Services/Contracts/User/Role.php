<?php

namespace Backend\Models\Services\Contracts\User;

interface Role{

    public function create();

    public function accredit();
    
    public function joinUser();  
}