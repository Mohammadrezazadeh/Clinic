<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Description of DoctorType
 *
 * @author Mohammad
 */
class DoctorType extends AbstractType {

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add('name', null, array('label' => 'name', 'attr' => array('style' => 'width: 200px')))
                ->add("lastname", null, array('label' => 'lastname', 'attr' => array('style' => 'width: 250px')))
                ->add("info", 'textarea', array(
                    'attr' => array('cols' => '3', 'rows' => '3')));
    }

    public function getName() {
        return"app_doctor";
    }

}
