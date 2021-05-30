<?php

namespace App\Controller;

use Framework\Controller;
use App\Model\ProductModel;

class UserController extends Controller {

    public function home() {
        $productModel = new ProductModel;
        $listOfProducts = $productModel->fetchProducts();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
            dd($_POST);
        }else {
            $this->renderTemplate('homepage.html.twig', [
                'listOfProducts' => $listOfProducts
            ]);

        }
    }

}