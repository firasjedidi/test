<?php

namespace App\Form;

use App\Entity\GestionActualites;
use App\Entity\GestionCatgories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class GestionActualitesType extends AbstractType
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
            ->add('image', FileType::class, [
                'label' => 'image',
                'mapped' => false,
                'required' => false,
            ])
            ->add('courte_description', TextareaType::class,[
                'required' => false,
                'attr' => ['class' => 'form-control tinyMCE'],
            ])
            ->add('contenu', TextareaType::class,[
                'required' => false,
                'attr' => ['class' => 'form-control tinyMCE'],
            ])
            ->add('date_debut' ,  DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ]) 
            ->add('date_fin' ,  DateType::class, [
                'widget' => 'single_text',
                'html5' => true,
            ]) 

            ->add('balise_titre',TextType::class,[
                'required' => false,
            ])
            ->add('meta_description',TextType::class,[
                'required' => false,
            ])
            ->add('meta_mot_cles',TextType::class,[
                'required' => false,
            ])
            ->add('active', CheckboxType::class, [
                'label' => 'active',
                'required' => false,
            ])
            
            ->add('categorie_id', EntityType::class, [
                'class' => GestionCatgories::class,
                'choice_label' => 'titre',
                'required' => false,
                'multiple' => false,
            ]
            )
            ->add('position')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => GestionActualites::class,
        ]);
    }
}
