<?php

namespace Application\Controlles;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;


class Article extends Controller
{

    public function index()
    {
        // var_dump('aaaa');
        $article = new ArticleModel();
        // var_dump('bbb');
        $articles = $article->all();
        return $this->view('panel.article.index', compact('articles'));
    }

    public function create()
    {
        $category = new Category();
        $categories = $category->all();
        return $this->view('panel.article.create', compact('categories'));
    }

    public function store()
    {
        $article = new ArticleModel();
        $article->insert($_POST);
        return $this->redirect('article');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $category = new Category();
        $categories = $category->all();
        $ob_article = new ArticleModel();
        $article = $ob_article->find($id);
        return $this->view('panel.article.create', compact('categories', 'article'));
    }

    public function update($id)
    {
        $article = new ArticleModel();
        $article->update($id, $_POST);
        return $this->redirect('article');
    }

    public function delete($id)
    {
        $article = new ArticleModel();
        $article->delete($id);
        return $this->back();
    }

}

?>