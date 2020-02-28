<?php


namespace App\Controllers;


use App\Models\Article;
use System\Core\BaseController;
use System\Exceptions\FileNotFoundException;

class ArticleController extends BaseController
{
    public function __call($name, $arguments)
    {
        $this->show($name);
    }

    public function index()
    {
        // TODO: Implement index() method.
    }

    public function show($slug)
    {
        $article = (new Article)->where('slug', $slug)
                                ->where('status', 'Published')
                                ->where('published_at', date('Y-m-d H:i:s'), '<=')
                                ->first();

        if(is_null($article)){
            throw new FileNotFoundException('Article not found.');
        }
        view('front/article/show.php',compact('article'));
    }
}