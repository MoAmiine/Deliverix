<?php

abstract class Person
{
    private string $nom;
    private string $prenom;

    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function getNom($nom): string
    {
        return $this->nom;
    }
    public function getPrenom($prenom): string
    {
        return $this->prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
}