<?php

namespace App\Form;

use App\Entity\BlocsCms;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class BlocsCmsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('actif',CheckboxType::class,[
                'label'=> 'Actif',
                'required' => false,
            ])
            ->add('link')
            ->add('title_link')
            //->add('date_add')
            ->add('date_add', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text',
                'attr' => ['class' => 'datepicker'],
                'html5' => false,
                'format' => 'dd/MM/yyyy',
                'required' => false,
    
            ])
            ->add('hook')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false,
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BlocsCms::class,
        ]);
    }
}
