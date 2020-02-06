<?php

if(!function_exists('config')) {

    function config($key) {
        require BASEDIR."/config/settings.php";

        if(key_exists($key, $config)){
            return $config[$key];
        }
        else {
            return false;
        }
    }
}

if(!function_exists('view')){

    function view($file, $data = []){
        \System\Core\View::make($file, $data);
    }
}

if(!function_exists('url')){

    function url($uri = '') {
        return config('site_url').$uri;

    }
}

if(!function_exists('login_check')){

    function login_check() {
        if(isset($_SERVER['user']) && !empty($_SESSION['user'])) { //check whether the usr is set or not.
            $user = new \App\Models\User;
            $check = $user->select('id')->where('id',$_SESSION['user'])->first();

            if(!is_null($check)){
                return true;

            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }
}
if(!function_exists('redirect')){
    function redirect($url) {
        header("location: {$url}");
        die;
    }
}

if(!function_exists('auth')) {
    function auth($url)
    {
        if (!login_check()) {
            //header("location".url('login')); //for redirect before login(if login password is wrong).. if function is not created
            redirect($url); // if function is created
        }
    }
}