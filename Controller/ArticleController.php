<?php

declare(strict_types = 1);

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = Article::all();
        // Load the view
        require 'View/articles/index.php';
    }

    public function show($id)
    {
        $article = (new Article())->getArticle($id);
        require 'View/articles/show.php';
    }
}