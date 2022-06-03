<?php

namespace App\Controllers;

class HomeController extends BaseController{
    public function showWelcomePage(){
        return view('General/WelcomePage');
    }
    

}


?>