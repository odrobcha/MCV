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

    public function show(int $id)
    {
        $requiredArticle = new Article();
        $requiredArticle->getArticle($id);

        $description = $requiredArticle->description();
        $header = $requiredArticle->header();
        $publishDate = $requiredArticle->publishDate();

        require 'View/articles/show.php';
    }
}