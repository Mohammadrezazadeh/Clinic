<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

/**
 * Description of DoctorType
 *
 * @author Mohammad
 */
class Doctor_GroupType extends AbstractType {

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        $builder->add('name', null, array('label' => 'name', 'attr' => array('style' => 'width: 200px')))
                ;
    }

    public function getName() {
        return"app_doctor_group";
    }

}
