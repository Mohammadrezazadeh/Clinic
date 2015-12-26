<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Description of CureType
 *
 * @author Mohammad
 */
class CureType extends AbstractType{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder
                ->add("name")
                ->add("lastname")
                ->add("fathername")
                ->add("email")
                ->add("nastionalCode")
                ->add('gender', 'choice', array('choices' => array('male' => 'Male', 'female' => 'Female'),'attr'=>array('style' => 'width: 200px')))
                ->add("telphone")
                ->add("mobile")
                
                ;
                
    }
    public function getName() {
        return "App_Cure";
    }
    
}
