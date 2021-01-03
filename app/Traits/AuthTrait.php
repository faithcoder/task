<?php
namespace App\Traits;
use Illuminate\Support\Facades\Auth;

trait AuthTrait{
    public function userAuthCheck(){
        if(!Auth::user()){
            throw new \Exception('you must logged in to use this Repository');
        }
    }
}

