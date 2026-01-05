<?php 

interface CrudInterface {
    public function Ajouter($entity);
    public function Modifier($entity);
    public function Supprimer($id);
    public function Afficher();

}
