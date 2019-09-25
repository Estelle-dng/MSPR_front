<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\CategorySearch;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class CategorySearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minCapacity', IntegerType::class, [
                'required' => false,
                'label' => 'Capacité d\'accueil',
                'attr' => [
                    'placeholder' => 'Capacité minimum'
                ]
            ])
            ->add('name', EntityType::class,
                [
                    'class' => Category::class,
                    'label' => 'Type de logement',
                    'required' => false,
                    'placeholder' => 'Type de logement'

                ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategorySearch::class,
            'method' => 'get',
            'csrf_protection' => false /* Pas besoin de token pour faire une recherche */
        ]);
    }

   public function getBlockPrefix()
    {
        return '';
    }

}
