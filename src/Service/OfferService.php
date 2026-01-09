<?php 

class OfferService extends Offre{
    public function __construct($id, $description, $duree_estimee, $prix, $commande, $livreur) {
        parent::__construct($id, $description, $duree_estimee, $prix, $commande, $livreur);
    }

    public function OfferCountByCommande($commandeId) {
        $offerRepository = new OfferRepository(null, null, null, null, null, null);
        return $offerRepository->GetOfferCountByCommande($commandeId);
    }
}   