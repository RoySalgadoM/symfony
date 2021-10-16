<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomersController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT c.customernumber,c.customername, c.contactlastname, c.contactfirstname, c.phone, c.addressline1, c.addressline2, c.city ,c.state, c.postalcode, c.country, c.creditlimit, IDENTITY(c.salesrepemployeenumber) salesrepemployeenumber FROM App:Customers c');
        $listCustomers = $query->getResult();

        return $this->render('customers/customers.html.twig', [
            'lista' => $listCustomers
        ]);
    }
}
