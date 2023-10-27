<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function register(){
    return view('register');
} 
   public function login(){
    return view('login');
}   
   public function registerprocess(){
}
   public function loginprocess(){
}
}
