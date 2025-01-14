<?php

namespace App\Controller;



use App\Form\Type\Registry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
  #[Route('/', name: 'index')]
  public function index(): Response
  {

$form= $this->createForm(Registry::class);

return $this->render("index/index.html.twig",[
"reg_form"=>$form->createView(),
]);          
    
}
}
