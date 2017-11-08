<?php

class Movie
{
    private $name = "un bon film ";
    private $description = 'Description du film';
    private $duration = 90;
    private $release ='2 octobre 2012';
    
    public function __construct($name ="")
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;   
    }
      public function setName($name ="")
    {
        $this->name = $name;   
    }
    
     public function getduration()
    {
        return $this->duration;   
    }
      public function setduration($duration ="")
    {
        $this->duration = $duration;   
    }
    
    function Affiche()
    {
        echo "Votre film est $this->name et il dure $this->duration minutes\n";
    }
}
$movie1 = new Movie;
$movie1->Affiche();
//echo $movie1->getName();
$movie1->setName("un film ");
$movie1->setDuration(120);
//echo $movie1->getName();
$movie1->Affiche();