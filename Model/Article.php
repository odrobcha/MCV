<?php
require_once 'Model/DatabaseManager.php';

class Article extends DatabaseManager
{
    public ?string $title;
    public ?string $description;
    public ?string $publish_date;
    public string $author;
    public string $first_name;
    public string $family_name;
    public int $author_id;

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
        //$sql = "SELECT title, description, publish_date, author, author_id FROM `articles` WHERE `id`=" .$id;
        $sql ="SELECT title, description, publish_date, first_name, family_name, author_id FROM `articles` INNER JOIN authors ON authors.id = articles.author_id WHERE articles.id =" .$id;
        $article = $instance->connect()->query($sql)->fetch();


        $this->title = $article['title'];
        $this->description = $article['description'];
        $this->publish_date = $article['publish_date'];
        $this->first_name = $article['first_name'];
        $this->family_name = $article['family_name'];
      //  $this->author = $article['author'];
        $this->author_id = $article['author_id'];

        return $article;
    }

    public function description() :string
    {
        return $this->description;
    }

    public function header() :string
    {
        return $this->title .' - By  <a href="/index.php?page=author&author_id=' .$this->author_id.'">' .$this->first_name .' ' . $this->family_name . '</a>';
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
