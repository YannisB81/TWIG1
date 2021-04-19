<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }
    public function showProducts()
    {
        $products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];
        return $this->twig->render('Home/products.html.twig', ['products' => $products]);
    }
}
