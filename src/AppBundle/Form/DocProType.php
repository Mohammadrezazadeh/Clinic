<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ِDocProType
 *
 * @author Mohammad
 */
class DocProType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("date")
                ->add("day")
                ->add("name")
                ->add("clinic")
                ->add("strat")
                ->add("end")
                ->add("payVisite")
                ->add("payIns");
    }
    public function getName() {
        return"app_doctor_pro";
    }
}
