<?php

namespace App\Form;

use App\Entity\Products;
use App\Entity\Suppliers;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\Validator\Constraints\Regex;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ProductName', TextType::class,[
                'label' => 'Nom du produit',
                'help' => 'Indiquez le nom complet du produit',
                'attr' => [
                    'placeholder' => 'Produit',
                    ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                ]
            ])

            ->add('SupplierID' , EntityType::class,[
                'class' => Suppliers::class,
                'label' => 'Nom du fournisseur',
                'constraints' => [
                    new Regex([
                        'pattern' => '',
                        'message' => 'Fournisseur non valide'
                    ]),
                ]
            ])
            ->add('CategoryID', TextType::class,[
                'label' => 'ID de la catégorie',
                'attr' => [
                    'placeholder' => '',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                ]
            ])
            ->add('QuantityPerUnit', TextType::class,[
                'label' => 'Quantité par unité',
                'attr' => [
                    'placeholder' => 'Quantité par unité',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Mauvaise quantité'
                    ]),
                ]
            ])
            ->add('UnitPrice', TextType::class,[
                'label' => 'Prix unitaire',
                'attr' => [
                    'placeholder' => 'Prix unitaire',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Prix incorrect'
                    ]),
                ]
            ])
            ->add('UnitsInStock' , TextType::class,[
                'label' => 'Quantité en stock',
                'attr' => [
                    'placeholder' => 'Quantité en stock',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Quantité non valide)'
                    ]),
                ]
            ])
            ->add('UnitsOnOrder' , TextType::class,[
                'label' => 'Quantité en commande',
                'attr' => [
                    'placeholder' => 'Quantité en commande',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Quantité non valide)'
                    ]),
                ]
            ])
            ->add('ReorderLevel' , TextType::class,[
                'label' => "Niveau d'alerte",
                'attr' => [
                    'placeholder' => "Niveau d'alerte" ,
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*$/',
                        'message' => 'Quantité non valide)'
                    ]),
                ]
            ])
            ->add('Discontinued', TextType::class)

            ->add('picture2', FileType::class, [
                'label' => 'Photo de profil',
                //unmapped => fichier non associé à aucune propriété d'entité, validation impossible avec les annotations
                'mapped' => false,
                // pour éviter de recharger la photo lors de l'édition du profil
                'required' => false,
                'constraints' => [
                    new Image([
                        'maxSize' => '2000k',

                        'mimeTypesMessage' => 'Veuillez insérer une photo au format jpg, jpeg ou png'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
