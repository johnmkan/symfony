<?php

namespace Societe\gestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class societeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',null,array('attr' => array('class' => 'form-control')))
            ->add('num_siret',null,array('attr' => array('class' => 'form-control')))
            ->add('adresse',null,array('attr' => array('class' => 'form-control')))
            ->add('responsable',null,array('attr' => array('class' => 'form-control')))
            ->add('raison_social',null,array('attr' => array('class' => 'form-control')))
            ->add('date_creation', 'date',array('attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Societe\gestionBundle\Entity\societe'
        ));
    }
}
