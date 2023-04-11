<?php

namespace App\Form;

use App\Entity\GestionCatgories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class GestionCatgoriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,[
                'required' => true,
            ])
            ->add('url_simplifiee',TextType::class,[
                'required' => false,
            ])
            ->add('etat', CheckboxType::class, [
                'label' => 'etat',
                'required' => false,
            ])
            ->add('image', FileType::class, [
                'label' => 'image',
                'mapped' => false,
                'required' => false,
            ])
            ->add('description', TextareaType::class,[
                'required' => false,
                'attr' => ['class' => 'form-control tinyMCE'],
            ])
            ->add('meta_description',TextType::class,[
                'required' => false,
            ])
            ->add('meta_mot_cles',TextType::class,[
                'required' => false,
            ])
            ->add('meta_titre',TextType::class,[
                'required' => false,
            ])
            ->add('position')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GestionCatgories::class,
        ]);
    }
}
