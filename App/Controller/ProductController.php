<?php


namespace App\Controller;

use Cocur\Slugify\Slugify;
use App\Model\UserModel;
use Framework\Controller;


class ProductController extends Controller{

    public function User():void{
        $userModel = new UserModel();
        $user = $userModel->getUser();
        $this->renderTemplate('search.html.twig');
    }
}