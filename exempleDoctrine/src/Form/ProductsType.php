<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ProductName', TextType::class,[
                'label' => 'Nom du produit',
                'attr' => [
                    'placeholder' => 'Produit',
                    ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                    'help' => 'Vous devez rentrer le nom du produit ici',
                ]
            ])

            ->add('SupplierID' , TextType::class,[
                'label' => 'Nom du fournisseur',
                'attr' => [
                    'placeholder' => '',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Fournisseur non valide'
                    ]),
                    'help' => 'Veuillez choisir un fournisseur',
                ]
            ])
            ->add('CategoryID', TextType::class,[
                'label' => 'ID de la catégorie',
                'attr' => [
                    'placeholder' => '',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Caratère(s) non valide(s)'
                    ]),
                    'help' => 'Ce n est pas la bonne catégorie',
                ]
            ])
            ->add('QuantityPerUnit', TextType::class,[
                'label' => 'Quantité par unité',
                'attr' => [
                    'placeholder' => 'Quantité par unité',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Mauvaise quantité'
                    ]),
                    'help' => 'Quantité rentrée non valide',
                ]
            ])
            ->add('UnitPrice', TextType::class,[
                'label' => 'Prix unitaire',
                'attr' => [
                    'placeholder' => 'Prix unitaire',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Prix incorrect'
                    ]),
                    'help' => 'Le prix saisi est incorrect',
                ]
            ])
            ->add('UnitsInStock' , TextType::class,[
                'label' => 'Quantité en stock',
                'attr' => [
                    'placeholder' => 'Quantité en stock',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Quantité non valide)'
                    ]),
                    'help' => 'Vous devez rentrer le nom du produit ici',
                ]
            ])
            ->add('UnitsOnOrder' , TextType::class,[
                'label' => 'Quantité en commande',
                'attr' => [
                    'placeholder' => 'Quantité en commande',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Quantité non valide)'
                    ]),
                    'help' => 'Vous devez rentrer une quantité valide ici',
                ]
            ])
            ->add('ReorderLevel' , TextType::class,[
                'label' => "Niveau d'alerte",
                'attr' => [
                    'placeholder' => "Niveau d'alerte" ,
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Quantité non valide)'
                    ]),
                    'help' => 'Veuillez rentrer un niveau correct',
                ]
            ])
            ->add('Discontinued')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
