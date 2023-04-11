<?php

namespace App\Form;

use App\Entity\Navigation;
use App\Entity\NavigationListe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NavigationListeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('actif')
            ->add('titre')
            ->add('type_de_page' ,ChoiceType::class, [
                'choices'  => [
                    'Aucun Lien' => 'no-link',
                    'Lien' => 'link',
                    'CMS' =>'cms',
                    'Actualités' => 'news',
                    'Contact' => 'contact' 
                ],
            ])
            ->add('target' ,ChoiceType::class, [
                'choices'  => [
                    '_Top' => 1,
                    '_New' => 2,
                    '_Self' => 3,
                    '_Blank' => 4,
                    '_Parent ' =>5,  
                ],
            ])
            ->add('no_follow')
            ->add('navigation', EntityType::class, [
                'class' => Navigation::class,
                'choice_label' => 'titre'
            ])
            ->add('link')
            //->add('id_cms')
            //->add('id_news')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NavigationListe::class,
        ]);
    }
}
