<?php
require_once 'Model/DatabaseManager.php';

class Article extends DatabaseManager
{
    public ?string $title;
    public ?string $description;
    public ?string $publish_date;
    public string $author;

    public static function all() :array
    {
        $instance = new Article();
        $sql = "SELECT * FROM articles";
        $rows = $instance->connect()->query($sql)->fetchAll();

        $collection = [];

        foreach ($rows as $row){
            $article = new Article();
            foreach ($row as $key=>$value) {
                $article->{$key} = $value;
            }
            $collection[] = $article;
        }

        return $collection;
    }

    public function getArticle($id) :array
    {
        $instance = new Article();
        $sql = "SELECT title, description, publish_date, author FROM `articles` WHERE `id`=" .$id;

        $article = $instance->connect()->query($sql)->fetchAll();

        $this->title = $article[0]['title'];
        $this->description = $article[0]['description'];
        $this->publish_date = $article[0]['publish_date'];
        $this->author = $article[0]['author'];

        return $article;
    }

    public function description() :string
    {
        return $this->description;
    }

    public function header() :string
    {
        return $this->title .' - By ' .$this->author ;
    }

    /**
     * @throws Exception
     */
    public function publishDate() :string
    {
        $date = new DateTime($this->publish_date);
        return $date->format('F d, Y H:i');
    }
}
