<?php

class Movie
{
    //caratteristiche tipiche
    public $title;
    public $director;
    public $year_of_release;
    public $genre;

    //costruttore
    public function __construct($_title, $_director, $_year_of_release, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year_of_release = $_year_of_release;
        $this->genre = $_genre;
    }
    //metodi
    public function getTitle()
    {
        return $this->title;
    }
}

$starWars = new Movie('Star Wars', 'George Lucas', 1977, 'Sci-fi');
var_dump($starWars);

$lotr = new Movie('The Lord Of The Rings', 'Peter Jackson', 2001, 'Epic fantasy');
var_dump($lotr);
