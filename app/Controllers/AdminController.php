<?php

namespace App\Controllers;

class AdminController extends BaseController{

    public function showHomePage(){
        return view('Admin/HomePage');
    }

    public function showTransactionsPage(){
        return view('Admin/ViewTransactionsPage');
    }

    public function showReversalsPage(){
        return view('Admin/ViewReversalsPage');
    }

}


?>