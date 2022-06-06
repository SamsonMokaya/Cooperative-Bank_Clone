<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\TransactionModel;
use App\Models\RatingModel;

class UserController extends BaseController
{
    public function signUp(){
        $firstName = $this->request->getPost('FirstName');
        $lastName = $this->request->getPost('LastName');
        $email = $this->request->getPost('Email');
        $password = $this->request->getPost('Password');
        $confirmPassword = $this->request->getPost('ConfirmPassword');
        $gender = $this->request->getPost('Gender');
        $physicalAddress = $this->request->getPost('PhysicalAddress');
        $profession = $this->request->getPost('Profession');
        $cardNumber=hash('md5', $firstName.$lastName.$email.$password);

        if ($password == $confirmPassword) {
            $password = hash('md5', $password);
            $data = [
                'FirstName' => $firstName,
                'LastName' => $lastName,
                'Email' => $email,
                'Password' => $password,
                'Gender' => $gender,
                'PhysicalAddress' => $physicalAddress,
                'Profession' => $profession,
                'Amount' => 0,
                'CardNumber'=>$cardNumber,
            ];
            $userModel = new UserModel();
            $userModel->insertUser($data);
            echo "<script> alert('User Successfully Registered !'); </script>";
            echo view('General/SignUpPage');
        } else {
            echo "<script> alert('Passwords do not match'); </script>";
            echo view('General/SignUpPage');
        }
    }

    public function signIn(){
        $email = $this->request->getPost('Email');
        $password = $this->request->getPost('Password');
        $userModel = new UserModel();
        $transactionModel=new TransactionModel();
        if ($email == 'admin@gmail.com' && $password == 'admin') {
            echo "<script> alert('Successful login !'); </script>";
            $users=$userModel->getAllUsers();
            $transactions=$transactionModel->getAllTransactions();
            session()->set('users',$users);
            session()->set('transactions',$transactions);
            session()->set('userId', 0);
            return redirect()->to(base_url('admin_HomePage'));
        } else {
            $password = hash('md5', $password);
            $user = $userModel->getUserWhere(['Email' => $email, 'Password' => $password]);
            if ($user!='No-User') {
                $userId=$user['UserId'];
                $amount=$user['Amount'];
                $userName=$user['FirstName'].' '.$user['LastName'];
                $cardNumber=$user['CardNumber'];
                session()->set('userId', $userId);
                session()->set('userName', $userName);
                session()->set('amount', $amount);
                session()->set('cardNumber', $cardNumber);
                echo "<script> alert('User Successfully Signed In !'); </script>";
                return redirect()->route('user_HomePage');
            } else {
                echo "<script> alert('Invalid Email or Password'); </script>";
                echo view('General/SignInPage');
            }
        }
    }

    public function showHomePage(){
        echo view('User/HomePage');
    }

    public function showDepWithPage(){
        echo view('User/DepWithPage');
    }

    public function depositOrWithdraw(){
        $amount=$this->request->getPost('Amount');
        $type=$this->request->getPost('Type');
        $userId=session()->get('userId');
        $userName=session()->get('userName');
        $TransactionModel=new TransactionModel();
            $data=[
                'UserId'=>$userId,
                'Amount'=>$amount,
                'Type'=>$type,
                'Status'=>'Pending',
            ];
        if($type=='Deposit'){
            $TransactionModel->insertTransaction($data);
            echo "<script> alert('$amount successfully deposited to $userName\'s account. This transaction may take time to reflect into your account !'); </script>";
        }else if($type=='Withdraw'){
            echo "<script> alert('$amount successfully withdrawn from $userName\'s account. This transaction may take time to reflect into your account !'); </script>";
        }
        else{
            echo "<script> alert('Invalid Type'); </script>";
        }
        echo view('User/DepWithPage');
    }

    public function showTransHistoryPage(){
        echo view('User/TransHistoryPage');
    }

    public function showReversalsPage(){
        echo view('User/ReversalsPage');
    }

    public function logout(){
        $rating=$this->request->getPost('rating');
        $ratingModel=new RatingModel();
        $data=[
            'UserId'=>session()->get('userId'),
            'Rating'=>$rating,
        ];
        $ratingModel->insertRating($data);
        session()->destroy();
        echo "<script> alert('User Successfully Logged Out !'); </script>";
        echo view('General/WelcomePage');
    }

    
}
