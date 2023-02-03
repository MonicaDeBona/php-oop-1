<?php

class Movie
{
    //caratteristiche tipiche
    public $title;
    public $director;
    public $year_of_release;
    public $plot;
    public $genre;

    //costruttore
    public function __construct($_title, $_director, $_year_of_release, $_plot, $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year_of_release = $_year_of_release;
        $this->plot = $_plot;
        $this->genre = $_genre;
    }

    //metodi
    public function getTitle()
    {
        return $this->title;
    }
}
