<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null,["label"=>"titre",])
            ->add('lien',null,["label"=>"lien",])
            //->add('createAt',null,["label"=>"date de création",])
            ->add('category', ChoiceType::class, [
                            "choices" => [
                                 "ANIMES" => "animes",
                                 "HORREUR" => "horreur",
                                "ACTIONS" => "action",
                                 "COMEDIES" => "comédies",
                                "SCIENCEFICTIONS"=>"science-fictions"],
                            "label"=>"catégorie",])
            ->add('author',null,["label"=>"auteur",])
            ->add('submit', SubmitType::class,["label"=>"ajouter",])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
