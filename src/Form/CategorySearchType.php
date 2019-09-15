<?php

namespace App\Form;

use App\Entity\CategorySearch;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minCapacity', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placehorlder' => 'Capacité d\'accueil'
                ]
            ])
            ->add('category', TextType::class, [
                'required' => false,
                'label' => false,
                'attr' => [
                    'placehorlder' => 'Type d\'emplacement'
                ]
            ])
        ;
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategorySearch::class,
            'method' => 'get',
            'csrf_protection' => false /* Pas besoi nde token pour faire une recherche */
        ]);
    }
}
