<?php

namespace App\Model;


use Framework\Model;
use \PDO;

class ProductModel extends Model{

    public function fetchProducts(){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchProduct($id){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM product WHERE idproduct = :id');
        $stmt->execute([
            'id' => $id,
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProduct($name, $price, $category, $location) {
        $db = $this->getDb();
        $query = $db->prepare('INSERT INTO `user`(`name`, `price`, `category`, `location`) VALUES (:name, :price, :category, :location)');
        $query->execute([
            'name' => $name,
            'price' => $price,
            'category' => $category,
            'location' => $location
        ]);
    }
}