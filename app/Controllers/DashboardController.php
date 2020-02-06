<?php


namespace App\Controllers;


use System\Core\BaseController;

class DashboardController extends BaseController
{
    public function __construct() //each class has unique constructor..check login
    {
        auth(url('login'));
        }


    public function index()
    {
    view('cms/dashboard/index.php');
    }

}