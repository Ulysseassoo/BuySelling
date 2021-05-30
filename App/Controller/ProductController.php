<?php

namespace App\Controller;

use Framework\Controller;
use App\Model\ProductModel;

class ProductController extends Controller {

    public function productToFetch($id) {
        
        $productModel = new ProductModel;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // We securize the POST data

            $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
            $price = htmlspecialchars($_POST['price'], ENT_QUOTES, 'UTF-8');
            $category = htmlspecialchars($_POST['category'], ENT_QUOTES, 'UTF-8');
            $location = htmlspecialchars($_POST['location'], ENT_QUOTES, 'UTF-8');
            $ProductToAdd = $productModel->createProduct($name, $price, $category, $location);
            if ($ProductToAdd) {
                $this->renderTemplate('product.html.twig', [
                    'success' => $ProductToAdd
                ]);
            }
        }
        else {
            $productInformations = $productModel->fetchProduct($id);
            $this->renderTemplate('product.html.twig', [
                'product' => $productInformations
            ]);
        }
    }

}