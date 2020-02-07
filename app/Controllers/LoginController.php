<?php


namespace App\Controllers;


use App\Models\User;
use System\Core\BaseController;

class LoginController extends BaseController

{
    public function index()
    {
        view('cms/login/index.php');
    }

    /**
     *
     */
    public function  check()
    {
        extract($_POST);

        $password = sha1($password);

        $user = new User;

        $check = $user->where('email', $email)
                    ->where('password',$password)
                    ->first();
//        dd($check, $_POST, !is_null($check));

         if(!is_null($check)){
            $_SESSION['user'] = $check->id;

            if(isset($remember) && $remember == 'yes') { //extracted and converted into variable
                setcookie('user', $check->id, time() +30*24*60*60, '/');
            }

            redirect(url('dashboard'));
    }
         else{
            set_message("Email and/or password is incorrect.", "danger");

            redirect(url('login'));
        }
    }
}