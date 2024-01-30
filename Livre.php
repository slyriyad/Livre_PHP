<?php

class Livre {
    private string $title;
    private int $nbPages;
    private string $publiYears;
    private int $price;
    private auteur $auteur;

    public function __construct(string $title,string $publiYears, int $nbPages, int $price, Auteur $auteur)
    {
        $this->title = $title;
        $this->nbPages = $nbPages;
        $this->publiYears = $publiYears;
        $this->price = $price;
        $this->auteur = $auteur;
        $this->auteur->addlivre($this);
    }
    

  
    public function getTitle()
    {
        return $this->title;
    }

     
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

     
    public function getNbPages()
    {
        return $this->nbPages;
    }

     
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

     
    public function getPubliYears(): string
    {
        return $this->publiYears;
    }

    
    public function setPubliYears($publiYears)
    {
        $this->publiYears = ($publiYears);

        return $this;
    }

     
    public function getPrice()
    {
        return $this->price;
    }

    
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

     
    public function getAuteur()
    {
        return $this->auteur;
    }

    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }


    public function __toString()
    {
        return $this->title."(".$this->publiYears.")"." : ".$this->nbPages." pages / ".$this->price." €";
    }
}

