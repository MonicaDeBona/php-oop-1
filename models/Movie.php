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
    public function getMovie()
    {
        return '<div class="movie-card">'
            . "<h3> $this->title </h3>"
            . "<p> $this->director </p>"
            . "<p> $this->year_of_release </p>"
            . "<p> $this->genre </p>"
            . '</div>';
    }
}
