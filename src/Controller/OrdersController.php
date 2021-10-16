<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT IDENTITY(o.customernumber) customernumber , o.ordernumber, o.orderdate, o.requireddate,  o.shippeddate, o.status, o.comments FROM App:Orders o');
        $listOrders = $query->getResult();

        return $this->render('orders/orders.html.twig', [
            'lista' => $listOrders
        ]);
    }
}
