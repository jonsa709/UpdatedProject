<?php


namespace App\Controllers;


use App\Models\Article;
use System\Core\BaseController;


class HomeController extends BaseController
{
    public function index()
    {
        $article = new Article;
        $articles = $article->get();

        $users = [];

       /*View::make('demo.php', ['articles' => $articles, 'users => $users']);*/
        View('/test/demo.php', compact('articles','users')); //compact is used for creating shortcut for array
    }

}