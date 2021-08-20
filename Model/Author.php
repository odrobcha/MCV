<?php

require_once 'Model/DatabaseManager.php';

class Author extends DatabaseManager
{
    public ?string $first_name;
    public ?string $family_name;
    public ?string $university;
    public ?string $summary;



    public function getAuthor($id): array
    {
        $instance = new Author();
        $sql = "SELECT first_name, family_name, summary, university FROM `authors` WHERE `id`=" . $id;

        $author = $instance->connect()->query($sql)->fetch();

        $this->first_name = $author['first_name'];
        $this->family_name = $author['family_name'];
        $this->university= $author['university'];
        $this->summary=$author['summary'];

        return $author;
    }

    public function fullName()
    {
        return ucwords($this->first_name) . ' ' .ucwords($this->family_name);
    }

    public function university()
    {
       return  'Work at ' .ucwords($this->university);
    }

    public function description()
    {
        return 'Summary: ' .$this->summary;
    }



}
