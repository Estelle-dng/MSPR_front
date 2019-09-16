<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minCapacity', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'capacity', /* Spécifie les options de ma balise select */
                'label' => 'Capacité d\'accueil'
            ])
            ->add('typeCategory', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'name', /* Spécifie les options de ma balise select */
                'label' => 'Type de logement'
            ])

        ;
    }

    /*
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchCategory::class,
            'method' => 'get',
            'csrf_protection' => false /* Pas besoi nde token pour faire une recherche */

   /* public function getBlockPrefix()
    {
        return '';
    }*/

}
