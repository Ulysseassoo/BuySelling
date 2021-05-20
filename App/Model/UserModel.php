<?php

namespace App\Model;


use Framework\Model;
use \PDO;

class UserModel extends Model{

    public function fetchUser(int $id){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM user WHERE iduser = :iduser');
        $stmt->execute([
            'iduser' => $id,
        ]);
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

}