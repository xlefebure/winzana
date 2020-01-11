<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre',
                    'required' => true
                ]
            ])
            ->add('description', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description'
                ]
            ])
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prénom',
                    'required' => true
                ]
            ])
            ->add('firstname', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom',
                    'required' => true
                ]
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ville',
                    'required' => true
                ]
            ])
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email',
                    'required' => true
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
