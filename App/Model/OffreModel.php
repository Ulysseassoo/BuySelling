<?php

namespace App\Model;


use Framework\Model;
use \PDO;

class OffreModel extends Model{

    public function fetchOfferFromUser(int $iduser){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM offre WHERE user_iduser = :iduser');
        $stmt->execute([
            'iduser' => $iduser,
        ]);
        $offre = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $offre;
    }

    public function fetchAllOffers(int $iduser){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM offre WHERE user_iduser = :iduser');
        $stmt->execute([
            'iduser' => $iduser,
        ]);
        $offre = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $offre;
    }

}