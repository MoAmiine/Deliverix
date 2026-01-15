<?php 

class Auteur extends Person{
    private int $id;
    private $livres = [];

    public function __construct($nom, $prenom, $id, $livres)
    {
        parent::__construct($nom, $prenom);
        $this->id = $id;
        $this->livres = $livres;
    }
    

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($livres): self
    {
        $this->livres = $livres;

        return $this;
    }
    
}