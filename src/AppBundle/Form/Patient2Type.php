<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of Patient2Type
 *
 * @author Mohammad
 */
class Patient2Type extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("name")
                ->add("lastname");
    }
    public function getName() {
        return "app_patient2";
    }
}
