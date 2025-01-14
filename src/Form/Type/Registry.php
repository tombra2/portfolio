<?php

namespace App\Form\Type;

use App\Entity\RegistryEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Registry extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder -> add("vorname", TextType::class);
        $builder -> add("nachname", TextType::class);
        $builder -> add("adresse", TextType::class);
        $builder -> add("plz", TextType::class);
        $builder -> add("wohnort", TextType::class);
        $builder -> add("geburtsdatum",DateType::class);
        $builder -> add("email",EmailType::class);
        $builder -> add("username", TextType::class);
        $builder -> add("password", PasswordType::class);
        $builder -> add("benutzer_anlegen",SubmitType::class);

    }

public function configureOptions(OptionsResolver $resolver)
{

    $resolver->setDefaults([
        "data_class"=>RegistryEntity::class,
        "csrf_protection"=> true
    ]);

}
   
}