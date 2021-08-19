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

    // Note: this function can also be used in a repository - the choice is yours


    public function show($id)
    {
        // TODO: this can be used for a detail page
        require 'View/articles/show.php';
    }
}