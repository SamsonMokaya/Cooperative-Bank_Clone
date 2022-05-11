<?php 

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController{

    public function showHomePage(){
        return view('User/home_page');
    }

    public function signUserUp(){

        $firstName= isset($_POST["FirstName"])? $_POST["FirstName"] : "";
        $lastName=isset($_POST["LastName"])? $_POST["LastName"] : "";
        $emailAddress=isset($_POST["EmailAddress"])? $_POST["EmailAddress"] : "";
        $password=isset($_POST["Password"])? $_POST["Password"] : "";
        $confirmPassword=isset($_POST["ConfirmPassword"])? $_POST["ConfirmPassword"] : "";
        $gender=isset($_POST["Gender"])? $_POST["Gender"] : "";

        if($password==$confirmPassword){
            $data=[
                'FirstName'=>$firstName,
                'LastName'=>$lastName,
                'EmailAddress'=>$emailAddress,
                'Password'=>hash("md5", $password),
                'Gender'=>$gender,
                'Amount'=>0,
            ];

            $userModel=new UserModel();
            $userModel->insertUser($data);
            echo "<script> alert('User successfully logged in ! '); </script>";
            echo view("General/signUp_page");
        }
        else{
            echo "<script> alert('Passwords do not match'); </script>";
            echo view("General/signUp_page");
        }        
    }

    public function signUserIn(){
        $emailAddress=isset($_POST["EmailAddress"])? $_POST["EmailAddress"] : "";
        $password=isset($_POST["Password"])? $_POST["Password"] : "";
            $data=[
                'EmailAddress'=>$emailAddress,
                'Password'=>hash("md5", $password),
            ];

            $userModel=new UserModel($data);
            $user=$userModel->getUserWhere($data);       
            
            if(count($user)>0){
                echo "<script> alert('Successful login'); </script>";
                session()->set('userName', $user['FirstName'].' '.$user['LastName']);
                session()->set('balance', $user['Amount']);
                echo view("User/home_page");
            }
            else{
                echo "<script> alert('User not found !'); </script>";
            }
    }

    public function logUserOut(){
        session()->destroy();
        return redirect()->route('/');
    }

}
