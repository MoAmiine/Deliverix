<?php 


class OfferRepository extends Offre{
    
public function __construct($id, $description, $duree_estimee, $prix, $commande, $livreur) {
        parent::__construct($id, $description, $duree_estimee, $prix, $commande, $livreur);
    }

    public function GetOfferCountByCommande($commandeId) {
        $stmt = $this->conn->prepare('SELECT COUNT(*) as offer_count FROM Offres WHERE commande = ?');
        $stmt->execute([$commandeId]);
        $result = $stmt->fetch();

        return $result['offer_count'];
    }
}