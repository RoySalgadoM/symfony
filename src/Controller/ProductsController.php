<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT p.productcode , p.productname, IDENTITY(p.productline) productline, p.productscale, p.productvendor, p.productdescription, p.quantityinstock, p.buyprice, p.msrp FROM App:Products p');
        $listOrdD = $query->getResult();

        return $this->render('products/products.html.twig', [
            'lista' => $listOrdD
        ]);
    }
}
