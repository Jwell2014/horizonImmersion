<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Session;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $random = random_int(11111111, 99999999);
        $builder
            ->add('username', TextType::class, [
                'label' => "Nom d'utilisateur",
            ])
            ->add('password', TextType::class, [
                'label' => 'Mot de passe',
                'attr' => array(
                    'class'=> 'col-6',
                    'placeholder' => 'Mot de passe'
                ),
                'data' => $random
            ])
            ->add('roles', HiddenType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'required' => false,
                ),
                'data' => ['ROLE_PARTICIPANT'],
            ))
            ->add('ptpwd', HiddenType::class, [
                'data' => $random
            ])
            ->add('Session', EntityType::class, [
                'class' => Session::class,
                'choice_label' => 'NomDeSession',
                'placeholder' => 'Veuillez choisir une session',
                'label' => "Nom de session",
            ])
        ;
        $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesAsArray) {
                    // transform the array to a string
                    return implode(', ', $rolesAsArray);
                },
                function ($rolesAsString) {
                    // transform the string back to an array
                    return explode(', ', $rolesAsString);
                }
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class, Session::class

        ]);
    }
}
