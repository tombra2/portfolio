<?php

namespace App\Controller;

use App\Form\Type\Registry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{

public function __construct(private readonly EntityManagerInterface $em)
{
  
}

  #[Route('/', name: 'index')]
  public function index(Request $request): Response
  {
$form= $this->createForm(Registry::class);
$form->handleRequest($request);

if ($form-> isSubmitted()&& $form->isValid()) {
$data = $form->getData();

$this->em->persist($data);
$this->em->flush();
return $this->redirectToRoute("index_reg");

}
return $this->render("index.html.twig",[
"reg_form"=>$form->createView(),
]);          
    
}
}
