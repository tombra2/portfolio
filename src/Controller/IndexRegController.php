<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexRegController extends AbstractController {

#[Route(path:"/index_reg", name:"index_reg")]
public function IndexAction():Response
{


    return $this->render("index_reg.html.twig");
}




}