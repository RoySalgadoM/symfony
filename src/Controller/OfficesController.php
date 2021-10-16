<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OfficesController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT o.officecode, o.city, o.phone, o.addressline1, o.addressline2, o.state, o.country, o.postalcode, o.territory FROM App:Offices o');
        $listOffices = $query->getResult();

        return $this->render('offices/offices.html.twig', [
            'lista' => $listOffices
        ]);
    }
}
