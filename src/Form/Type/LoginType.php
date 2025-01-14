<?php 

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class LoginType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder-> add("login",SubmitType::class);
        $builder ->add("user",TextType::class,["empty_data"=> ""]);
        $builder-> add("password",PasswordType::class,["empty_data"=> ""]);
    }
    


}