<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of GInsuranceType
 *
 * @author Mohammad
 */
class GInsuranceType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add("name");
    }
    public function getName() {
        return"app_Group_Insurace";
    }
}
