<?php

namespace App\Model;


use Framework\Model;
use \PDO;

class UserModel extends Model{

    public function getProduct(){
        $db = $this->getDb();
        $stmt = $db->query('SELECT * FROM product');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}