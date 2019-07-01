<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content')
            ->add('category', null, ['choice_label' => 'name'])
            //le formulaire doit savoir comment représenter dans le selecteur une instance de Category
            ->add('tags',
                EntityType::class,
                [
                    'class' => Tag::class,
                    'by_reference' => false, // appelle la methode set
                    'multiple' => true, // = used to render check boxes and radio box
                    'expanded' => true, //
                    'choice_label' => 'name',
                ]);
            //'choice_label' => 'name' = c'est le getter getName qui est appelé

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
