<?php

namespace App\Form;

use App\Entity\Estate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('rooms')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat', ChoiceType::class, ['choices' => $this->getReverseChoice()])
            ->add('city')
            ->add('address')
            ->add('postal_code')
            ->add('sold')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Estate::class,
            'translation_domain' => 'forms'
        ]);
    }

    private function getReverseChoice()
    {
        $choice = Estate::HEAT;
        $array = [];
        foreach($choice as $key => $value) {
            $array[$value] = $key;
        }
        return $array;
    }
}
