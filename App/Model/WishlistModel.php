<?php

namespace App\Model;


use Framework\Model;
use \PDO;

class WishlistModel extends Model{

    public function fetchWishlist(int $userId){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT wishlist FROM user WHERE iduser = :iduser');
        $stmt->execute([
            'iduser' => $userId,
        ]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public function fetchProductsFromWishlist(int $wishlistId){
        $db = $this->getDb();
        $stmt = $db->prepare('SELECT * FROM wishlist_has_product WHERE WishList_idWishList = :wishlistId
        LEFT JOIN product ON product.idproduct = wishlist_has_product.product_idproduct');
        $stmt->execute([
            'wishlistId' => $wishlistId,
        ]);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

}