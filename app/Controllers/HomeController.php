<?php


namespace App\Controllers;


use App\Models\Article;
use System\Core\BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $article = new Article;

        $breaking = $article->where('status','Published')
                            ->where('published_at', date('Y-m-d H:i:s'), '<=')
                            ->orderBy('published_at', 'DESC')
                            ->select('name, slug, featured_image, published_at, content' )
                            ->first();

        $articles = $article->where('status','Published')
            ->where('published_at', date('Y-m-d H:i:s'), '<=')
            ->orderBy('published_at', 'DESC')
            ->offset(0)
            ->limit(9)
            ->select('name, slug, featured_image' )
            ->get();
        view('front/home/index.php', compact('breaking','articles'));
    }
}