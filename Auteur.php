<?php

class Auteur {
    private string $firstName;
    private string $surname;
    private array $livres;

    public function __construct(string $firstName, string $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->livres = [];
    }

    
    public function getFirstName()
    {
        return $this->firstName;
    }

    
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

     
    public function getSurname()
    {
        return $this->surname;
    }

    
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function __toString()
    {
       return $this->firstName." ".$this->surname;
    }

 
    public function getLivres()
    {
        return $this->livres;
    }

     
    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }


    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }


    function afficherBibliographie(){
        $result ="<strong>Livres de ".$this." :<br><br><ul style='list-style-type:none;'></strong>";
        foreach($this->livres as $livre){
            $result .= "<li>$livre</li>";
        }
        $result .= "</ul>";

        return $result;
    }
}