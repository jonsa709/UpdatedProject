<?php


namespace App\Controllers;

use App\Models\Article;
use App\Models\Category;
use System\Core\BaseController;


class ArticlesController extends BaseController
{
    public function __construct()
    {
        auth(url('login'));

    }
    public function index()
    {
        $article = new Article();
        $paginate = $article->paginate();

        $articles = $paginate['data'];

        view('cms/articles/index.php', compact('articles','paginate'));
    }
    public function create()
    {
        $category = new Category;
        $categories = $category->select('id, name')
                        ->where('status','active')
                        ->get();

        view('cms/articles/create.php',compact('categories'));

    }

    public function store()
    {
        extract($_POST);

        $article = new Article();
        $article->name = $name;
        $article->slug = $slug;
        $article->content = $content;
        $article->featured_image = $featured_image;
        $article->category_id = $category_id;
        $article->status = $status;
        $article->created_at = date('Y-m-d H:i:s');
        $article->updated_at = date('Y-m-d H:i:s');
        $article->published_at = date('Y-m-d H:i:s');
        $article->save();

        set_message('article added.', 'success');
        redirect(url('articles'));
    }

    public function edit($id)
    {
        $category = new Article($id);

        view('cms/articles/edit.php', compact('article'));
    }

    public function update($id)
    {
        $article = new Article($id);

        extract($_POST);
        $article->name = $name;
        $article->slug = $slug;
        $article->content = $content;
        $article->featured_image = $featured_image;
        $article->category_id = $category_id;
        $article->status = $status;
        $article->updated_at = date('Y-m-d H:i:s');
        $article->published_at = date('Y-m-d H:i:s');
        $article->save();

        set_message('article updated.', 'success');
        redirect(url('articles'));
    }

    public function destroy($id){
        $article = new Article($id);
        $article->delete();

        set_message('Article removed.','success');
        redirect(url('Articles'));
    }
}