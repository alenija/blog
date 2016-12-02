<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('blog', CKEditorType::class, [
                'config' => [
                    'extraPlugins' => 'youtube',
                ],
                'plugins' => [
                    'youtube' => [
                        'path'     => '/ckeditor/plugins/youtube/',
                        'filename' => 'plugin.js',
                    ],
                ],
            ])
            ->add('image', FileType::class)
            ->add('tags')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\Blog'
        ));
    }

    public function getBlockPrefix()
    {
        return 'blog_bundle_type';
    }
}
