<?php

namespace App\Controllers;

class HomeController extends BaseController{
    
    public function index(){
        return view('General/welcome_page');
    }

    public function showSignUpPage(){
        return view("General/signUp_page");
    }

    public function showSignInPage(){
        return view("General/signIn_page");
    }

}


?>