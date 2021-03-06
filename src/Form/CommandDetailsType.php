<?php

namespace App\Form;

use App\Entity\CategoryHasSeason;
use App\Entity\CommandDetails;
use App\Entity\CommandDetailsHasOption;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandDetailsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('price')
            ->add('date')
            ->add('reservation_start')
            ->add('reservation_end')
            ->add('discount', IntegerType::class)
            ->add('commandDetailsHasOption', EntityType::class, [
                'class' => CommandDetailsHasOption::class])
            ->add('Category_has_season', EntityType::class, [
                'class' => CategoryHasSeason::class
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CommandDetails::class,
        ]);
    }
}
