<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentsController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT IDENTITY(p.customernumber) customernumber , p.amount, p.paymentdate, p.checknumber FROM App:Payments p');
        $listOrdD = $query->getResult();

        return $this->render('payments/payments.html.twig', [
            'lista' => $listOrdD
        ]);
    }
}
