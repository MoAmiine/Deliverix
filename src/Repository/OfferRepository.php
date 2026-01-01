<?php 

class OfferRepository extends Offre{
    
public function __construct($id, $description, $duree_estimee, $prix, $commande, $livreur) {
        parent::__construct($id, $description, $duree_estimee, $prix, $commande, $livreur);
    }
}