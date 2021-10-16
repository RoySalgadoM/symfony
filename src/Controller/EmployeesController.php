<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeesController extends AbstractController
{
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $query =  $em->createQuery('SELECT e.employeenumber, e.lastname, e.firstname, e.extension, e.email, e.jobtitle, IDENTITY(e.reportsto) reportsto , IDENTITY(e.officecode) officecode FROM App:Employees e');
        $listEmployees = $query->getResult();

        return $this->render('employees/employees.html.twig', [
            'lista' => $listEmployees
        ]);
    }
}
