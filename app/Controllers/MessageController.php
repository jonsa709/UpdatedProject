<?php


namespace App\Controllers;


use System\Core\BaseController;

class MessageController extends BaseController
{
    public function index()
    {
        extract($_POST);

        $to ="jonisha8k@gmail.com";
        $subject = "Contact message from Newssite";
        $from = "From: {$email}";
        $info = "Hello Admin\r\n
        You have received new message as follows:\r\n\r\n
        Name: {$name}\r\n
        Email: {$email}\r\n
        Message: {$message}\r\n
        ";

        @mail($to, $subject, nl2br($info), $from);

        set_message("Thank you for your email. We'll get in touch with you asap." , "success");

        redirect($_SERVER['HTTP_REFERER']);
    }
}