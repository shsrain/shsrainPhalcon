<?php

namespace Backend\Models\Services\Contracts\User;

interface Group{

    public function create();

    public function accredit();
    
    public function joinRole();   
}