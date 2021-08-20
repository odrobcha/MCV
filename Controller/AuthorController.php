<?php
declare(strict_types = 1);

class AuthorController
{
    public function index()
    {
        // Usually, any required data is prepared here
        // For the home, we don't need to load anything
        $instance = new Author();
        $author = $instance->getAuthor($_GET['author_id']);

        $fullName = $instance->fullName();
        $university = $instance->university();
        $description = $instance->description();

        // Load the view
        require 'View/author/index.php';
    }
}
