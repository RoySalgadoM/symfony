<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderDetailsController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT IDENTITY(o.productCode) productCode , IDENTITY(o.orderNumber) orderNumber, o.orderLineNumber, o.priceEach, o.quantityOrdered FROM App:OrderDetails o');
        $listOrdD = $query->getResult();

        return $this->render('orderdetails/orderdetails.html.twig', [
            'lista' => $listOrdD
        ]);
    }
}
