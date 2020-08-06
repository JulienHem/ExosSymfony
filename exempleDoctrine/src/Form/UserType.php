<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email' , TextType::class,[
                'label' => 'E-Mail ',
                'help' => '',
                'attr' => [
                    'placeholder' => 'Ex : JarjarNotBinks@gmail.com',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                ]
            ])
            ->add('mdp' , PasswordType::class,[
                'label' => 'Mot de passe',
                'help' => '',
                'attr' => [
                    'placeholder' => ''
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                ]
            ])
            ->add('role' , EntityType::class,[
                'class' => User::class,
                'label' => "Rôle de l'utilisateur",
                'constraints' => [
                    new Regex([
                        'pattern' => '',
                        'message' => 'Rôle non valide'
                    ]),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
